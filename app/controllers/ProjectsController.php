<?php
namespace App\Controllers;

require_once '../app/core/Controller.php';

use App\Core\Controller;

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
}