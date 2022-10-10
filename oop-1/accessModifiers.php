<?php
// access modifiers  [public - protected - private ]
// public (global scope - child scope - parent scope)
// protected ( child scope - parent scope)
// private ( parent scope )
class mobile {
    private $color = 'black';

    public function print()
    {
        echo $this->color;
    }
}
class samsung extends mobile {
    public function printData()
    {
        echo $this->color;
    }
}
// $mobile = new mobile;
# global scope
// echo $mobile->color;
// print_r($mobile);



# parent scope
// $mobile->print();

# child scope
$samsung = new samsung;
// $samsung->printData();
// print_r($samsung);


