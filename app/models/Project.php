<?php
namespace App\Models;

use App\Core\Database;

class Project extends Database
{

    public function getByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO projects (name, description, team_name, icon, owner_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ssssi", $data['name'], $data['description'], $data['team_name'], $data['icon'], $data['owner_id']);
        return $stmt->execute();
    }

    public function getAllProjects()
    {
        $query = "SELECT p.*, u.name as owner_name, (SELECT COUNT(*) FROM project_members pm WHERE pm.project_id = p.id) as total_members, (SELECT GROUP_CONCAT(users.avatar) FROM project_members pm JOIN users ON pm.user_id = users.id WHERE pm.project_id = p.id) as member_avatars FROM projects p JOIN users u ON p.owner_id = u.id LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created_at DESC";

        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}