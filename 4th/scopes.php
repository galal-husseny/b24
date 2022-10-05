<?php

$x = 5; //global var


// $x = 5; // local var
// 1. function
// 2. class
// 3. interface
// 4. trait



function test(){
    $y = 6; // local var
    echo($x);
}

// test();

// echo $y;


function test2(){
    echo $y; // local
    $z = 10;
}

test2();