<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Project;
use App\Models\User;

class ProjectsController extends Controller
{
    public function index()
    {
        $projectModel = new Project();

        $projects = $projectModel->getAllProjects();

        $data = [
            'title' => 'Projects',
            'active_page' => 'projects',
            'projects' => $projects
        ];

        $this->view('projects/index', $data);
    }

    public function create()
    {
        $userModel = new User();
        $projectModel = new Project();

        $categories = $projectModel->getAllCategories();
        $users = $userModel->getAll();

        $data = [
            'title' => 'Create New Project',
            'active_page' => 'projects',
            'categories' => $categories,
            'users' => $users
        ];

        $this->view('projects/create', $data);
    }

    public function store()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $name = $_POST['name'];
        $description = $_POST['description'];
        $team_name = $_POST['team_name'];
        $category_id = $_POST['category_id'];
        $owner_id = $_SESSION['user_id'];

        $iconName = 'default-project.png';

        if (isset($_FILES['icon']) && $_FILES['icon']['error'] == 0) {
            $extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
            $newFileName = "project_" . time() . "_" . uniqid() . "." . $extension;

            $destination = "../public/assets/uploads/projects/" . $newFileName;

            if (move_uploaded_file($_FILES['icon']['tmp_name'], $destination)) {
                $iconName = $newFileName;
            }
        }

        $projectModel = new Project();

        $projectId = $projectModel->create([
            'name' => $name,
            'description' => $description,
            'team_name' => $team_name,
            'icon' => $iconName,
            'category_id' => $category_id,
            'owner_id' => $owner_id
        ]);

        if ($projectId) {

            $projectModel->addMember($projectId, $owner_id, 'Owner');

            if (isset($_POST['member_id']) && is_array($_POST['member_id'])) {
                foreach ($_POST['member_id'] as $m_id) {
                    if ($m_id == $owner_id)
                        continue;
                    $projectModel->addMember($projectId, $m_id, 'Member');
                }
            }

            header('Location: /projects');
            exit;
        } else {
            echo "Gagal menyimpan project.";
        }
    }

    public function detail($id)
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        $projectModel = new Project();

        $project = $projectModel->getProjectById($id);

        if (!$project) {
            header('Location: /projects');
            exit;
        }

        $members = $projectModel->getProjectMembers($id);

        $data = [
            'title' => 'Project - ' . $project['name'],
            'active_page' => 'projects',
            'project' => $project,
            'members' => $members
        ];

        $this->view('projects/detail', $data);
    }
}