<?php
namespace App\Core;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        $content = "../app/views/" . $view . ".php";

        require_once '../app/views/layout/app.php';
    }
}

?>