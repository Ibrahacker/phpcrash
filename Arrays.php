<?php

//simple arrays
$numbers = [1,44,55,6]; 


//var_dump($numbers);
$fruits = array('apple', 'Mangoes', 'Pineapple');

//print_r ($numbers);
//var_dump($numbers);

//echo $fruits[0];

//associative array

$colors = [
    1=>'red',
    2=>'rio',
    3=>'blue',
    4=> 'green'

];

//echo $colors [3];

$hex = [

    'red'=>'#9087'
];

//echo $hex['red'];

$hex = [
    'red' => '#00500',
    'blue' => '#7868'

];

//echo $hex['red'];

$person = [
    'first_name' =>'Ibrahim',
    'last _name' => 'Muktar',
    'email' => 'ibrahmu006@gmail.com'
];

//echo $person ['email'];

//Multi-Dimensional Arrays
$people = [
    [
        'first_name' =>'Kim',
        'last _name' => 'Muktar',
        'email' => 'Kim006@gmail.com'
    ],

    [
        'first_name' =>'Son',
        'last _name' => 'Muktar',
        'email' => 'Son006@gmail.com'
    ],

    [
        'first_name' =>'Mai',
        'last _name' => 'Muktar',
        'email' => 'MaiMai@gmail.com'
    ]
];

//echo $people[2]['email'];

var_dump(json_encode($person));