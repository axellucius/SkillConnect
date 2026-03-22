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

    public function profile()
    {
        $data = 'data testing';
        require_once '../app/views/auth/profile.php';
    }
}
?>