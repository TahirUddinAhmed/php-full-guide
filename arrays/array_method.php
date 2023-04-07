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

 // array_marge($array ...$array):array
 $array2 = [1, 2, 3];
 $array3 = ['a' => 4, 7 => 5, 8 => 6];
 $array4 = [7, 8, 9];

 $merged = array_merge($array2, $array3, $array4);

 printArray($merged);

 // array_reduce() 
 $invoiceItems = [
   ['price' => 9.99, 'qty' => 3, 'desc' => 'item 1'],
   ['price' => 29.99, 'qty' => 2, 'desc' => 'item 2'],
   ['price' => 149, 'qty' => 1, 'desc' => 'item 3'],
   ['price' => 39, 'qty' => 1, 'desc' => 'item 4'],
   ['price' => 12.5, 'qty' => 6, 'desc' => 'item 5']
 ];

 $total = array_reduce($invoiceItems, function($sum, $item) {
    return $sum + $item['price'] * $item['qty'];
 });

echo $total;
echo "<br>";
// you can also use this 👇🏽
// $total;
//    foreach($invoiceItems as $item) {
//      global $total;
//      $total += $item['price'] * $item['qty'];
     
//    }

// array_search
$array5 = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc'];
$key1 = array_search('e', $array5);

// if($key1 === false) {
//     echo "Letter not found!<br>";
// } else {
//     var_dump($key1);
// }

if(in_array('tm', $array5)) {
    echo "Letter found!<br>";
} else {
    echo "Letter not found!<br>";
}



   


 

