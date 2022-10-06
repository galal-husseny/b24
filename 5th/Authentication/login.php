<?php
$users = [
    [
        'id'=>1,
        'name'=>'ahmed',
        'email'=>'ahmed@gmail.com',
        'password'=>'$2y$10$JBDfIa5KczyL8BwOWIBUQuoeYeQhAdBTyDunvPrJ4L5GAhtZ6JRPu', //123456
        'gender'=>'m',
        'image'=>'1.jpg'
    ],
    [
        'id'=>2,
        'name'=>'nelly',
        'email'=>'nelly@gmail.com',
        'password'=>'$2y$10$kgK1vBYIRuBCSM3HFxDn8.gulvr/6iXLRQFLY0HebJu2Uj1K9R7mq', // 123456789
        'gender'=>'f',
        'image'=>'2.jpg'
    ],
    [
        'id'=>3,
        'name'=>'amira',
        'email'=>'amira@gmail.com',
        'password'=>'$2y$10$JBDfIa5KczyL8BwOWIBUQuoeYeQhAdBTyDunvPrJ4L5GAhtZ6JRPu', // 123456
        'gender'=>'f',
        'image'=>'3.jpg'
    ]
];
$title = "login";
include "layouts/header.php";
include "middlewares/guest.php";
include "layouts/navbar.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // print_r($_POST); // body
    // validation
    $errors = [];
    if(empty($_POST['email'])){
        // error
        $errors['email'] = "<p class='text-danger font-weight-bold'> Email address is required </p>";
    }

    if(empty($_POST['password'])){
        // error
        $errors['password'] = "<p class='text-danger font-weight-bold'> Password is required </p>";
    }

    if(empty($errors)){ // no validation error
        // search
        // array_filter
        foreach($users AS $user){
            if($_POST['email'] == $user['email'] && password_verify($_POST['password'],$user['password'])){
                // authenticated
                $_SESSION['user'] = $user;
                header('location:index.php');die;
            }
        }
        $errors['email'] = "<p class='text-danger font-weight-bold'> Wrong Email Or Password </p>";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1> Login</h1>
        </div>
        <div class="col-4 offset-4 mt-5">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" required class="form-control" value="<?= $_POST['email'] ?? "" ?>" placeholder="" aria-describedby="helpId">
                    <?= $errors['email'] ?? "" ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <?= $errors['password'] ?? "" ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark rounded form-control" > Login </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>