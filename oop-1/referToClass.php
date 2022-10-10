<?php

class User {
    public $name;
    public $gender;
    public static $status = 'active'; // refer to class
    public const BONUS = 50; // constant => refer to class => className::constant 
    public static function login()
    {
        // echo "login <br>";
        echo Self::BONUS; // self => refer to current class => inside class scope
    }

    public function test()
    {
        echo User::BONUS;
        echo self::BONUS;
        echo static::BONUS; // differnce between self & static ?
    }
}

echo User::$status;
// User::login();
$user = new user;
$user->test();


