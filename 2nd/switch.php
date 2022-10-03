<?php

// switch ($variable) {
//     case 'value1':
//         # code...
//         break;
//     case 'value2':
//         # code...
//         break;
//     default:
//         # code...
//         break;
// }


// $color = "Blue";

// switch($color){
//     case "Black":
//     case "Blue":
//         echo "I like this color {$color}  <br>";
//         break;
//     case "Red":
//     case "Yellow":
//         echo "I don't like this color {$color}  <br>";
//         break;
//     default:
//         echo "I don't even know this color {$color}  <br>";
// }

$studentGrade = 60;
define('MAX_GRADE',200);


switch($studentGrade){
    case $studentGrade < 0:
    case $studentGrade > MAX_GRADE:
        echo "Invalid Grade";
        break;
    case $studentGrade >= 0 && $studentGrade < (MAX_GRADE/2):
        echo "Failed";
        break;
    default:
        echo "success";
}


if($studentGrade >= (MAX_GRADE/2) && $studentGrade <= MAX_GRADE){
    echo "success";
}elseif($studentGrade >= 0 && $studentGrade < (MAX_GRADE/2)){
    echo "failed";
}else{
    echo "invalid";
}
