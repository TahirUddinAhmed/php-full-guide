<?php
 require('helpers.php');
 // array_chunk
 $items = [
    'a' => '1',
    'b' => '2',
    'c' => '3',
    'd' => '4',
    'e' => '5'
 ];

 printArray(array_chunk($items, 2, true));
 echo "<br>";

 // array combine
 // array lenght should be same in array_combine otherwise it cause an error
 $arr1 = ['a', 'b', 'c'];
 $arr2 = [1, 2, 3];
 printArray(array_combine($arr1, $arr2));
 echo "<br>";
 $arr3 = array_combine($arr1, $arr2);
 echo $arr3['c'];
 echo "<br>";

 // array filter
 $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 echo "even numbers: " . "<br>";
 $even = array_filter($numbers, function($el) {
    if($el % 2 == 0) {
        return $el;
    }
 });

 printArray($even);

 // array_keys

 $array1 = [
    'a' => '1',
    'b' => '4',
    'c' => '6',
    'd' => '10',
    'e' => '15'
 ];

 $keys = array_keys($array1);
 printArray($keys);



 

