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
    
    public function listSkills()
    {
        require_once '../app/views/skills/list-skills.php';
    }

    public function skillDetail()
    {
        require_once '../app/views/skills/skill-detail.php';
    }
}
?>