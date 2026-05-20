<?php
namespace App\Models;

use App\Core\Database;

class Project extends Database
{
    public function getByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE owner_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO projects (name, description, team_name, icon, owner_id, category_id) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);

        $stmt->bind_param(
            "ssssii",
            $data['name'],
            $data['description'],
            $data['team_name'],
            $data['icon'],
            $data['owner_id'],
            $data['category_id']
        );

        if ($stmt->execute()) {
            return $this->db->insert_id;
        }
        return false;
    }

    public function getAllProjects()
    {
        $query = "SELECT p.*, u.name as owner_name, c.name as category_name, (SELECT COUNT(*) FROM project_members pm WHERE pm.project_id = p.id) as total_members, (SELECT GROUP_CONCAT(CONCAT_WS(':', u2.name, IFNULL(u2.avatar, ''))) FROM project_members pm JOIN users u2 ON pm.user_id = u2.id WHERE pm.project_id = p.id) as member_data FROM projects p JOIN users u ON p.owner_id = u.id LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created_at DESC";

        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM categories ORDER BY name ASC";

        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addMember($projectId, $userId, $role)
    {
        $query = "INSERT INTO project_members (project_id, user_id, role) VALUES (?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iis", $projectId, $userId, $role);
        return $stmt->execute();
    }

    public function getProjectById($id)
    {
        $query = "SELECT projects.*, categories.name AS category_name, users.name AS owner_name, (SELECT COUNT(*) FROM project_members WHERE project_members.project_id = projects.id) AS member_count FROM projects LEFT JOIN categories ON projects.category_id = categories.id LEFT JOIN users ON projects.owner_id = users.id WHERE projects.id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getProjectMembers($id)
    {
        $query = "SELECT users.id, users.name, project_members.role FROM project_members JOIN users ON project_members.user_id = users.id WHERE project_members.project_id = ? ORDER BY FIELD(project_members.role, 'Owner', 'Member') ASC, users.name ASC";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $members = [];

        while ($row = $result->fetch_assoc()) {
            $members[] = $row;
        }

        return $members;
    }

    public function bulkDelete($ids)
    {
        // Mengamankan ID menjadi tipe integer untuk mencegah SQL Injection
        $cleanIds = array_map('intval', $ids);
        $idList = implode(',', $cleanIds);

        // Sesuaikan kueri ini dengan arsitektur database/PDO yang Anda gunakan di Core Model
        // Contoh jika menggunakan PDO Native:
        $sql = "DELETE FROM projects WHERE id IN ($idList)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute();
    }
}