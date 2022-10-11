<?php

class user {
    public function login()
    {
        echo "email & password";
    }
}
$user = new user;
$user->login();

class admin {
    public function login()
    {
        echo "phone & password";
    }
}

$admin = new admin;
$admin->login();