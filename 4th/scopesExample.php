<?php

$number = 20; // global

# pass by value
// function incrementNumber($number){ // local
//     echo ++$number; // local
//     echo '<br>';
// }

// incrementNumber($number); // global => 21
// echo $number; // global => 20


# pass by reference
// function incrementNumberByRef(&$number){ // global
//     echo ++$number; // global
//     echo "<br>";
// }

// incrementNumberByRef($number); // global
// echo $number; // global


// counter function => 3 ways 

$counter = 1;

// function counterV1(&$counter){
//     echo $counter++;
//     echo "<br>";
// }

// counterV1($counter);
// counterV1($counter);
// counterV1($counter);
// counterV1($counter);

// function counterV2($counter){
//     echo "{$counter}<br>";
//     return ++$counter; // local
// }


// counterV2(counterV2(counterV2(counterV2($counter))));

// $result1 = counterV2($counter); //2
// $result2 = counterV2($result1); // 3
// $result3 = counterV2($result2); // 4


// function counterV3 (){
//     static $counter = 0;
//     $counter++;
//     echo "{$counter}<br>";
// }
// counterV3 (); // 1
