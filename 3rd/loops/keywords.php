<?php

// break => skip current loop

// continue => ignore current iteration


$users = ['amira','nourhan','mona','nada','ahmed','nada','aya'];
$needle = 'amira';



// foreach ($users as $index => $user) {
//     // if($index % 2 == 0){
//         // even
//         // echo $user . '<br>';
//     // }

//     if($index % 2 != 0){
//         // odd
//         continue;
//     }
//     echo $user . '<br>';
// }





// $searchResult = false;
// foreach($users as $index=>$user){
//     if($user === $needle){
//         $searchResult = true;
//         break;
//     }
// }


// if($searchResult){
//     echo "user found";
// }else{
//     echo "user not found";
// }