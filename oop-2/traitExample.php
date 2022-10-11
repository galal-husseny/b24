<?php

class person1 {
    public $id,$name;

    public function uploadPhoto()
    {
        echo "upload photo from ".__CLASS__." <br>";
    }
}

trait media1 {
    public function uploadPhoto()
    {
        echo "upload photo from ".__TRAIT__." <br>";
    }
}


class user extends person1 {
    use media1;
}

$user = new user;
$user->uploadPhoto(); // trait -> highest 