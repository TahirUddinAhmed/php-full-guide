<?php
 // parameter / arguments
             

 declare(strict_types=1);
   // parameters 👇🏽
 function foo(int|float $x, int|float $y = 10) { // y is by default 10
    return $x + $y;
 }
 
 // arguments 👇🏽
 echo foo(5, 20.21);
 echo "<br>";
 function fun(int|float &$x, int|float $y) {
    if($x % 2 == 0) {
        $x /= 2;
    }

    return $x * $y;
 }

 $a = 6.0;
 $b = 7;

 echo fun($a, $b) . "<br>";

 var_dump($a, $b);
 echo "<br>";


 function sum(int|float ...$numbers): int|float {
    // $sum = 0;
    // foreach($numbers as $number) {
    //    $sum += $number;
    // }
    // return $sum;
    // instead of using this 👆🏽 we can use a built it function array_sum()

   return array_sum($numbers);
    
 }

 echo sum(5, 2, 1, 54.56, 50) . "<br>";


 // named arguments
 function mul(int|float $num1, int|float $num2) {
    return $num1 * $num2;
 }

 $p = 5;
 $q = 10;

 echo "result = ";
 echo mul(num2: $q, num1: $p);


 // resources
//  Named arguments: https://www.php.net/manual/en/functions.arguments.php#functions.named-arguments
// RFC : https://wiki.php.net/rfc/named_params
