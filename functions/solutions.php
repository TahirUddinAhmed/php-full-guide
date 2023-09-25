<?php
declare(strict_types=1);

// Q: Write a program that returns the sum of first n natural numbers
function sumOfN(int $n): int {
   $ans = 0;
   for($i = 1; $i <= $n; $i++) {
    $ans += $i;
   }

   return $ans;
}

echo sumOfN(5);
echo "<br>"; // new line 

// Q:Define a function to find out if a number is prime or not.

function isPrime(int $n): bool {
  for($i = 2; $i < $n; $i++) {
    if($n % $i == 0) {
        return false;
    }
  }

  return true;
}

$ans = isPrime(29);

if($ans) {
    echo "Prime";
} else {
    echo "Not prime";
}
