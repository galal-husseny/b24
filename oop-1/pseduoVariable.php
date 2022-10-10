<?php

class mobile {
    public string $brand;
    public string $color;

    public function turnON() :string
    {
        return "Welcome from {$this->brand} <br>"; // $this => refer to current object inside class
    }

    public function specs() :self
    {
        return $this;
    }

    public function WelcomeMessage() :void
    {
        echo $this->turnON();
    }

    public function test(int|float $x) :float|int
    {
        return $x++;
    }
}

$samsungMobile = new mobile;
$samsungMobile->brand = 'Samsung';
$samsungMobile->color = 'Black';
$samsungMobile->WelcomeMessage(); // Samsung
// print_r($samsungMobile->specs());

$iphoneMobile = new mobile;
$iphoneMobile->brand = "Apple";
$iphoneMobile->color = "White";
$iphoneMobile->WelcomeMessage(); // Apple
// print_r($iphoneMobile->specs());
// print_r($samsungMobile);
// print_r($iphoneMobile);

