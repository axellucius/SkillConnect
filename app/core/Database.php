<?php
namespace App\Core;

use mysqli;

class Database {
    protected $db;

    public function __construct() {

        $config = require '../app/config/database.php';
        
        $this->db = new mysqli(
            $config['host'], 
            $config['user'], 
            $config['pass'], 
            $config['db_name']
        );

        if ($this->db->connect_error) {
            die("Koneksi gagal: " . $this->db->connect_error);
        }
    }
}