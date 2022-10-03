<?php

class Database {
    
    public static function getPdo() {

        $username = 'root';
        $password = '';
        try {
            $conn = new PDO("mysql:host=localhost;dbname=authphp", $username, $password);
            // echo "success";
            return $conn;
            
        } catch (PDOException $e) {
            die('Connection failed :'. $e->getMessage());
        }
    }
}
?>