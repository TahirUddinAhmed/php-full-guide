<?php
 /* variable scope */
//  $x = 8;

//  include 'script1.php';

//  echo "<br>";
//  echo $x;

// $x = 5;
//  function foo() {
//    global $x;

//    $x = 10;
//     echo $x;
//  }

//  foo();
//  echo "<br>";
//  echo $x;

function getValue() {
    static $value = null;

    if($value === null) {
        $value = someVeryExpensiveFunction();
    }

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    echo "Processing<br>";

    return 10;
}

echo getValue() . "<br>";
echo getValue() . "<br>";
echo getValue() . "<br>";
echo getValue() . "<br>";