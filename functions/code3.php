<?php
//  variable, ANONYMOUS, arrow functions

// function sum(...$numbers):int|float {
//     $sum = 0;

//     foreach($numbers as $number) {
//         $sum += $number;
//     }
//     return $sum;
// }

// $x = "sum";

// if(is_callable($x)) {
//    echo $x(1, 2, 3, 8, 5);
// } else {
//     echo "Not callable<br>";
// }

// anonymous functions 
// $multi = 1;
// $mul = function (...$numbers)use($multi):int|float {
//     foreach($numbers as $number) {
//         $multi *= $number;
//     }
//     return $multi;
// };

// echo $mul(5, 2, 2);

// array_map
$arr = [1, 2, 3, 4];
$arr1 = array_map(function($element) {
   return $element * 2; 
}, $arr);

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

echo "<pre>";
print_r($arr1);
echo "</pre>";

$array = [1, 2, 3, 4];

function work($element) {
    return $element * 4;
} 

$res = array_map('work', $array);

echo "<br>";
echo "<pre>";
print_r($res);
echo "</pre>";


// arrow function
$num = [1, 2, 3, 4];
$y = 5;
$arrow_fun = array_map(fn($numbers) => $numbers * $y, $num);

echo "<br>";
echo "<pre>";
print_r($arrow_fun);
echo "</pre>";





