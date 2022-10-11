<?php
// namespace => virtual directory => organize application files
// allow the same name to be used more than once
include "classes/user/login.php";
include "classes/admin/login.php";
include "classes/seller/login.php";
use classes\user\login;
use classes\admin\login as adminLogin;
use classes\seller\login as sellerLogin;

$user = new login;
$admin = new adminLogin;
$seller = new sellerLogin;

$user = new login;