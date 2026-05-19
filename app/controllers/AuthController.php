<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Models\User;

class AuthController
{
    public function login()
    {
        require_once '../app/views/auth/login.php';
    }

    public function loginPost()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_class'] = $user['class'];
            header('Location: /');
            exit;
        }

        $error = "Email atau password salah!";
        require_once '../app/views/auth/login.php';
    }

    public function register()
    {
        require_once '../app/views/auth/register.php';
    }

    public function registerPost()
    {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirm = $_POST['password_confirmation'] ?? '';

        if ($password !== $confirm) {
            $error = "Password tidak cocok!";
            require_once '../app/views/auth/register.php';
            return;
        }

        $userModel = new User();

        if ($userModel->findByEmail($email)) {
            $error = "Email sudah digunakan!";
            require_once '../app/views/auth/register.php';
            return;
        }

        $userModel->create($name, $email, $password);
        header('Location: /login');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
        exit;
    }

    // GET /forgot-password
    public function forgotPassword()
    {
        require_once '../app/views/auth/forgot-password.php';
    }

    // POST /forgot-password
    public function forgotPasswordPost()
    {
        $email = $_POST['email'] ?? '';
        $new_password = $_POST['new_password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';

        if ($new_password !== $confirm_password) {
            $error = "Password tidak cocok!";
            require_once '../app/views/auth/forgot-password.php';
            return;
        }

        $userModel = new User();
        $user = $userModel->findByEmail($email);

        if (!$user) {
            $error = "Email tidak ditemukan!";
            require_once '../app/views/auth/forgot-password.php';
            return;
        }

        $userModel->updatePassword($email, $new_password);
        $success = "Password berhasil direset! Silakan login.";
        require_once '../app/views/auth/forgot-password.php';
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