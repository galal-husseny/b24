<?php

class user {
    private $gender; // male , female
    private $password;
    public $name;
    private const AVIALABLE_GENDERS = ['m','f'];
    private const MIN_PASSWORD_LENGTH = 8;

    public function getGender()
    {
        // control output
        if($this->gender == 'm'){
            return 'male';
        }elseif($this->gender == 'f'){
            return 'female';
        }else{
            return '';
        }
    } 

    public function setGender($gender)
    {
        // control inputs
        if(! in_array($gender,self::AVIALABLE_GENDERS) ){
            echo "AVIALABLE GENDERS : " . implode(',',self::AVIALABLE_GENDERS) .'<br>';return;
        }
        $this->gender = $gender;
    }

    public function setPassword($password)
    {
        if(strlen($password) < self::MIN_PASSWORD_LENGTH){
            echo "error";
        }else{
            $this->password = $password;
        }
    }

    public function getPassword()
    {
        if(! empty($this->password)){
            return password_hash($this->password,PASSWORD_BCRYPT);
        }
        return "";
    }
}

$user = new user;
$user->setGender('f');
echo $user->getGender();