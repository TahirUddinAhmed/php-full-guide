<?php
declare(strict_types=1); // strict 
function addNum(float | int $a, float | int $b): float {
    return $a + $b;
}

// echo addNum(5, "90");
echo addNum(5, 154);
echo "<br>"; // new line


// pass by reference 
function increment(&$n) {
    $n++;
}

$a = 12;
increment($a);
echo $a;