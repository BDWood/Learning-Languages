<?php

function add($a, $b) {
    return $a + $b;
}

function add3($a, $b, $c) {
    return $a + $b + $c;
}

function add4($a, $b, $c, $d) {
    return $a + $b + $c + $d;
}


// echo add(5, 10);

// echo add3(5, 10, 15);

// echo add4(5, 10, 15, 20);


$num_array = [1, 2, 27, 42];

// $sum = 0;

// for ($i = 0; $i < count($num_array); $i++) {
//     $sum += $my_array[$i]
//}
 
// function sum_array($array) {
//     $sum = 0;
//     for ($i = 0; $i < count($array); $i++) {
//         $sum += $array[$i];
//     }
//     return $sum;
// }

// echo sum_array($num_array);


function sum_array($arrays) {

    $sum = 0;
    foreach ($arrays as $array) {
        $sum += $array;
    }

    return $sum;

}

// function absValue($number) {
//     if ($number < 0) {
//         return $number * -1;
//     } else {
//         return $number;
//     }
// }


// $x = -5;

// echo absValue(100);


// function smashNames($firstName, $lastName) {
//     return $firstName . ' ' . $lastName;
// }

// $firstName = 'Bryan';

// $lastName = 'Wood';


// echo smashNames($firstName, $lastName);

$num_array2 = [];


// function calcMean($array) {
//     if  (count($array) == 0) {
//         return 0;
//     }
//     return sum_array($array) / count($array);

// }

// echo calcMean($num_array);


function fullName($array) {
    $firstName = $array['first_name'];
    $lastName = $array['last_name'];
    return $firstName . ' ' . $lastName;
    
}


$person = [
    'first_name' => 'bob',
    'last_name' => 'barker',
];

echo fullName($person);