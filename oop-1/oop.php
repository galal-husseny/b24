<?php


// class => blueprint which group similar tasks => organize application strucuture

// object => instance to access class scope into global scope


// class className {
//     property => variables
//     method => functions
//     constants
// }

# class Authentication
// function login
// function logout 
// function register

# class order
// function placeOrder
// function cancelOrder

# class product
// function showAllProducts
// function showMostRecentProducts

// access modifiers [public - protected - private]
class user {
    public $name; // property
    public $email;
    public $password;
    public $phone;
    public $gender;
    public $image = 'default.png';

    public function login() // method
    {
        // $x = 5; => local
        // if , for , print
        echo "login";
    }

    public function logout()
    {
        //
    }

    public function register()
    {
        //
    }

}
$user = new user; // object
$user->name = 'mina'; // edit
$user->gender = 'male';
$user->email = 'mina@gmail.com';
$user->password = '123456';
$user->phone = '0121313212132';
$user->id = 1;

// print_r($user);
// $user2 = new user;
// $user2->gender = 'female';
// $user2->name = "mona";
// $user2->email = 'mona@gmail.com';
// $user2->password = '123456';
// $user2->phone = '555656';
// print_r($user2);

// $user3 = new user;
// print_r($user3);

$user->login();