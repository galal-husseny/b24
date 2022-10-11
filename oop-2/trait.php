<?php 

trait media {
    public  $size;
    public function uploadPhoto()
    {
        echo "upload";
    }
    public static function uploadVideo()
    {
        echo "video";
    }
}

trait data {
    public function importData()
    {
        echo "import";
    }
}

trait generalTrait {
    use media , data;
}

class user {
    use generalTrait;
}

$user = new user;
$user->importData();

class prodcut {
    use generalTrait;
}