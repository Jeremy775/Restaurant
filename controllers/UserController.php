<?php 
require_once "models/User.php";

class UserController extends User {
    public function __construct($name, $pass, $passRepeat, $mail)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->passRepeat = $passRepeat;
        $this->mail = $mail;
    }

    public function signupUser()
    {
        $this->storeUser($this->name, $this->pass, $this->mail);
    }
}