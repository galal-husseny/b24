<?php

// indexed array => element (index,value)

$array = ['galal',5,null,false,6.5,[]];

$users = ['amira','nourhan','mona','nada','ahmed','nada'];

// 6 elements => 0->5

// elements = last index + 1
// last index = elements - 1

$lastIndex = count($users)-1;
// print_r($users);

echo $users[$lastIndex]; // get value => index
// $users[1] = 'ayat'; // edit
// $users[10] = 'mina'; // add
// $users[] = 'galal'; // add => after last index
// print_r($users);

// associative array => elements(string unique key,value)


$product = [
    'name'=>'laptop',
    'price'=>5500,
    'quantity'=>3,
];

// echo $product['price']; // get
// $product['price'] = 10000; // edit
// $product['code'] = 'lap123'; // add
// print_r($product);


// $_POST;
// $_GET;
// $_REQUEST;
// $_SERVER;