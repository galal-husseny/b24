<?php

abstract class animal {
    public $name;
    public abstract function eat();
    protected abstract function drink();
    public function breathe()
    {
        //
        echo "breathe";
    }
}


class cat extends animal {
    public function eat()
    {
       echo "cheese";
    }
    public function drink()
    {
       echo "milk";
    }
}
$cat = new cat;
$cat->eat();
class dog extends animal {
    public function eat()
    {
       echo "meat";
    }
    public function drink()
    {
       echo "water";
    }
}
$dog = new dog;
$dog->eat();