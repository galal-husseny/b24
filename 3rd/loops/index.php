<?php
$users = ['amira','nourhan','mona','nada','ahmed','nada','aya'];

# for
// for($counter=2;$counter<=10;$counter+=2){
//     echo "hello <br>";
// }
$lastIndex = count($users) - 1;
// for ($i=0; $i <= $lastIndex; $i++) { 
//     echo $users[$i] .'<br>';
// }
// for ($i=$lastIndex; $i >= 0 ; $i--) { 
//     echo $users[$i] .'<br>';
// }
# while
// $counter = 0;
// while($counter <= $lastIndex){
//     echo $users[$counter] . '<br>';
//     $counter++;
// }

# dowhile 
// $counter = $lastIndex;
// do{
//     echo $users[$counter] . '<br>';
//     $counter--;
// }while(false);

# foreach

// foreach($users as $index=>$value){
//     echo  $index .' => '.$value . '<br>';
// }


$product = [
    'name'=>'laptop',
    'price'=>15000
];


// foreach($product As $key=>$value){
//     echo $key . ' ===>> ' . $value . '<br>';
// }

foreach ($product AS $value){
    echo $value . '<br>';
}