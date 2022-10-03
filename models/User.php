<?php 
require_once "models/Database.php";

class User {

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getPdo();
    }

    public function storeUser($name, $pass, $mail)
    {
        $query = "INSERT INTO  users(user_name, user_pass, user_mail) VALUES (:name, :pass, :mail)";

        $sql = $this->con->query($query);

        $sql->bindValue(":name", $name, PDO::PARAM_STR);
        $sql->bindValue(":pass", $pass, PDO::PARAM_STR);
        $sql->bindValue(":mail", $mail, PDO::PARAM_STR);

        $sql->execute();

    }

    public function userExists($mail)
    {
        $checkUser = "SELECT mail from users WHERE mail='$mail' LIMIT 1";
        $res = $this->conn->query($checkUser);
        if ($res->num_row > 0)
        {
            return true;
        }else {
            return false;
        }
    }

}