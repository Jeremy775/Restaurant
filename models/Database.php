<?php

class Database {
    
    public static function getPdo() {

        $username = 'root';
        $password = '';
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=authphp", $username, $password);
            // echo "success";
            return $pdo;
            
        } catch (PDOException $e) {
            die('Connection failed :'. $e->getMessage());
        }
    }
}
?>