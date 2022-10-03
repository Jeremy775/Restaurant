<?php 
include_once ("models/User.php");

class UserController extends User {

    public function signupUser()
    {
        if (isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['passrepeat']) && isset($_POST['mail'])) {
            $name = strip_tags($_POST['name']);
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $passRepeat = $_POST['passrepeat'];
            $mail = $_POST['mail'];

            if ($pass !== $passRepeat) {
                die("Les mots de passe ne correspondent pas");
            }

            if($this->userExists($mail))
            {
                die("Cet utilisateur existe déjà");
            }

            $this->storeUser($name, $pass, $mail);

        } else {
            die('Le formulaire est incomplet');
        }
        
    }
}