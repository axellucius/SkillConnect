<?php
namespace App\Models;

use App\Core\Database;

class User extends Database
{
    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($name, $email, $password)
    {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare(
            "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $name, $email, $hashed);
        return $stmt->execute();
    }

    public function updatePassword($email, $newPassword)
    {
        $hashed = password_hash($newPassword, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashed, $email);
        return $stmt->execute();
    }

    public function getAll()
    {
        $current_user = $_SESSION['user_id'] ?? 0;
        
        $query = "SELECT id, name, class FROM users WHERE id != ? ORDER BY name ASC";
        
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $current_user);
        $stmt->execute();
        
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>