<?php
// 2 level
$user = [
    'id'=>1,
    'name'=>'olft',
    'orders'=>[
        150,200,500
    ],
    'activities'=>[
       'first'=>'gym','reading'
    ],
    'hobbies'=>(object)[
        'first'=>'running'
    ]
];

// echo $user['id'];
// echo $user['orders'][0];
// echo $user['activities']['first'];
// echo $user['hobbies']->first;


# 3 level
$users = [
    [
        'id' => 1,
        'name' => 'mohamed',
        'activities' => [
            'gym', 'reading'
        ],
        'orders' => ['150', '180']
    ],
    [
        'id' => 2,
        'name' => 'ahmed',
        'activities' => [
            'first'=>'gym'
        ],
        'orders' => ['100']
    ]
];

// indexed associative indexed
// echo $users[0]['activities'][1];

// echo $users[0]['orders'][1];

// echo $users[1]['activities']['first'];