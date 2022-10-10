<?php

// inheritance => single inheritance
// parent class - super class 
// child class - sub class

# parent class
class mobile_2022 {
    public $name;
    public $brand;
    public $price;
    public $color;
    public $ram;
    public $storage;
    public $battery;
    public $charger = true; // fasle => flagships
    public static $madeIn = "china";
    public const VERSION = 1.0;

    public function makeCall()
    {

    }
}
$mobile_2022 = new mobile_2022;
print_r($mobile_2022);

# child class (mobile_2022)
class mobile_2023 extends  mobile_2022{
    public $fingerPrint = true; // 2023
    // public const VERSION = 2.0;
}
$mobile_2023 = new mobile_2023;
print_r($mobile_2023);
// echo mobile_2023::VERSION;
# child class (mobile_2023)
class mobile_2024 extends mobile_2023 {
    public $faceId; // 2024
    public $fingerPrint = false; // override
}
$mobile_2024 = new mobile_2024;
print_r($mobile_2024);
