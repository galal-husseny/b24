<?php
$user = (object)[
    'name'=>'galal',
    'email'=>'gala@gmail.com',
    'password'=>123456
];


// echo $user->name; // get value

$user->email = 'galal.husseny@outlook.com'; // edit

$user->gender = 'male'; // add
var_dump($user);

