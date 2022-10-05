<?php 

// $price = 9.79;

// echo round($price);


// echo rand(10000,99999);


// array

$users = ['adel','menna','nada','abdelsalam'];
// if(in_array('amira',$users)){
//     echo "amira found";
// }else{
//     echo "amira not found";
// }
$stringUsers = implode(' , ',$users);
// echo "active students are " . $stringUsers;
// echo $stringUsers;

$arrayUsers = explode(' , ',$stringUsers);
// print_r($arrayUsers);


// $fullName = "nohran ali rezk";
// print_r(explode(' ',$fullName));


// string


// $password = 123456789;
// $passwordHash = '$2y$10$xq3V20Zpb.LAIAybk/NgWeF8xh6kgDgm13hqh/pqXOCaxQqoJgr8e';
// echo md5($password);
// echo "<br>";
// echo sha1($password);

// echo password_hash($password,PASSWORD_BCRYPT);
// var_dump(password_verify($password,$passwordHash));


// date

// echo time(); // return unix timestamp
// 1664972747

// 1970-1-1 00:00:00 => 1664972747 seconds => time ?
// 1.5 min => 2:25 + 1.5 min => 2:26:30
// echo date_default_timezone_get();
// date_default_timezone_set('Asia/Riyadh');
// echo date('d-m-Y h:i:s A');

// isset();
// empty();