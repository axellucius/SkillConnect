<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Projects',
            'active_page' => 'projects'
        ];
        $this->view('projects/index', $data);
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
        $owner_id = $_SESSION['user_id'];

        $iconName = 'default-project.png';

        if (isset($_FILES['icon']) && $_FILES['icon']['error'] == 0) {
            $extension = pathinfo($_FILES['icon']['name'], PATHINFO_EXTENSION);
            $newFileName = "project_" . time() . "." . $extension;
            
            $destination = "/assets/uploads/projects/" . $newFileName;

            if (move_uploaded_file($_FILES['icon']['tmp_name'], $destination)) {
                $iconName = $newFileName;
            }
        }

        $projectModel = new Project(); 
        $success = $projectModel->create([
            'name' => $name,
            'description' => $description,
            'team_name' => $team_name,
            'icon' => $iconName,
            'owner_id' => $owner_id
        ]);

        if ($success) {
            header('Location: /projects');
            exit;
        } else {
            echo "Gagal menyimpan project.";
        }
    }
}