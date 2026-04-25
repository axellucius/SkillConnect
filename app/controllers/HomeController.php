<?php
namespace App\Controllers;

require_once '../app/core/Controller.php';

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'active_page' => 'home'
        ];
        $this->view('home/index', $data);
    }
}