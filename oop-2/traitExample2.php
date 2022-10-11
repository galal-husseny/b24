<?php
trait media1 {
    public function uploadPhoto()
    {
        echo "upload photo from ".__TRAIT__." <br>";
    }
}

trait media2 {
    public function uploadPhoto()
    {
        echo "upload photo from ".__TRAIT__." <br>";
    }
}


class user {
    use media1,media2{
        media2::uploadPhoto AS uploadPhotoFromMedia2;
        media1::uploadPhoto insteadof media2;
    }
}

$user = new user;
$user->uploadPhotoFromMedia2(); //
