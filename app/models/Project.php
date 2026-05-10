<?php
namespace App\Models;

use App\Core\Database;

class Project extends Database {

    public function getByUserId($userId) {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data) {
    $query = "INSERT INTO projects (name, description, team_name, icon, owner_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->db->prepare($query);
    
    // Bind parameter sesuai kolom di screenshot
    $stmt->bind_param("ssssi", 
        $data['name'], 
        $data['description'], 
        $data['team_name'], 
        $data['icon'], 
        $data['owner_id']
    );
    
    return $stmt->execute();
}
}