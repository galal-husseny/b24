<?php
 
class person {
    public $id;
    public $name;
    public $age;
    public $email;
    public $password;
    public const PERSONTYPE = "Student";
    
    public function login()
    {
       echo "email & password <br>";
    }

    public function logout()
    {
        echo "logout <br>";
    }
}
$person = new person;
$person->login();

class instructor extends person {
    public $phone;
    public const PERSONTYPE = "Instructor";

    // override
    public function login()
    {
       echo "(email || phone) & password <br>";
    }
}

// echo instructor::PERSONTYPE;

$galal  = new instructor;
$galal->login();





class student extends person {

}

// $mona = new Student;
// $mona->name = "mona";
// $mona->id = 1;
// $mona->email = "mona@gmail.com";
// $mona->password = 123456;
// $mona->login();
// echo student::PERSONTYPE;