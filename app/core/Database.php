<?php
namespace App\Core;

use mysqli;

class Database {
    protected $db;

    public function __construct() {
        // Gunakan path yang benar dari folder core ke folder config
        $config = require_once '../app/config/database.php';
        
        // Tambahkan backslash \ di depan mysqli supaya dia cari di global PHP
        $this->db = new \mysqli(
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