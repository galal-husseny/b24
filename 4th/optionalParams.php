<?php

function addNumbersv1 ($number1 = 0, $number2 = 0, $number3 = 0){
    return $number1 + $number2 + $number3;
}


// echo addNumbersv1(1);

function printFullName ($lastName,$firstName = '*',$middleName = '*'){
    echo "{$firstName} {$middleName} {$lastName} <br>";
}

// printFullName('galal','abdelwahed','husseny');

#named arguments

// * abdelwahed husseny
printFullName(middleName:'abdelwhaed',lastName:'husseny');
// galal * husseny
printFullName(firstName:'galal',lastName:'husseny');