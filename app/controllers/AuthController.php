<?php
namespace App\Controllers;

class AuthController
{
    public function login()
    {
        require_once '../app/views/auth/login.php';
    }

    public function register()
    {
        require_once '../app/views/auth/register.php';
    }
}
?>