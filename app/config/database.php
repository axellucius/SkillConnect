<?php
class Database {
    private static $conn = null;

    public static function connect() {
        if (self::$conn === null) {
            self::$conn = new mysqli(
                'localhost',  
                'root',      
                '',           
                'skillconnect' 
            );
            if (self::$conn->connect_error) {
                die("Koneksi gagal: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
?>