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
        require_once '../app/views/auth/profile.php';
    }

    public function skills()
    {
        require_once '../app/views/skills/skill.php';
    }
    
}
?>