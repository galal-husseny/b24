<?php
declare(strict_types=1);

function AddNumbersV2 (float $number1 ,float $number2 ,float $number3) :int {
    return (int) ($number1 + $number2 + $number3);
}


echo addNumbersv2(1.5,2.9,1.1);