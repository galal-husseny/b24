<?php

abstract class person {
    public $id;
    public $name;
    public $email;
    public $phone;
    public $password;
    public static $status;

    public abstract function login();

    public function logout()
    {
        // logout
    }
}

class student extends person {
    public function login()
    {
        echo "login with email & password <br>";
    }
}

class instructor extends person {
    public function login()
    {
        echo "login with (email || phone) & password <br>";
    }
}