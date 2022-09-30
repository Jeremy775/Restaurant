<?php 

class User {

    private $name;
    private $pass;
    private $passRepeat;
    private $mail;

    public function storeUser()
    {
        if (isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['passrepeat']) && isset($_POST['mail'])) {
            $this->name = strip_tags($_POST['name']);
            $this->pass = $_POST['pass'];
            $this->passRepeat = $_POST['passrepeat'];
            $this->mail = $_POST['mail'];

            if (!$this->pass === $this->passRepeat) {
                die("Les mots de passe de correspondent pas");
            }

            $passHash = password_hash($this->pass, PASSWORD_DEFAULT);

            require_once "Database.php";

            $sql = "INSERT INTO `users`(`user_name`, `user_pass`, `user_mail`) VALUES (:name, :pass, :mail)";

            $query = $pdo->prepare($sql);

            $query->bindValue(":name", $this->name, PDO::PARAM_STR);
            $query->bindValue(":pass", $passHash, PDO::PARAM_STR);
            $query->bindValue(":mail", $this->mail, PDO::PARAM_STR);

            $query->execute();

        } else {
            die('Le formulaire est incomplet');
        }
    }
}