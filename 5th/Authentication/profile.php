<?php
$title = "Profile";
include "layouts/header.php";
include "middlewares/auth.php";
include "layouts/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1> Profile</h1>
        </div>
        <div class="col-2 offset-5">
            <img src="asset/images/users/<?= $_SESSION['user']['image'] ?>" class="w-100 rounded-circle" alt="">
        </div>
        <div class="col-4 offset-4 mt-5">
           
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $_SESSION['user']['name'] ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>" disabled>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" <?= $_SESSION['user']['gender'] == 'm' ? 'checked' : '' ?> disabled>
                    <label class="custom-control-label" for="customRadio1">Male</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"  <?= $_SESSION['user']['gender'] == 'f' ? 'checked' : '' ?> disabled>
                    <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>