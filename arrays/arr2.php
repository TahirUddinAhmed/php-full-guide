<?php
 // associative array
 $programmingLanguages = [
    'php'       => '8.1',
    'bootstrap' => '5.1.4',
    'Go'        => '1.4.1',
    'python'    => '5.6.1'
 ];


 echo "<pre>";
 print_r($programmingLanguages);
 echo "</pre>";

 //delete elements from the last 
 array_pop($programmingLanguages);

 echo "<pre>";
 print_r($programmingLanguages);
 echo "</pre>";

 // delete element from an specified position
 unset($programmingLanguages['Go']);

 echo "<pre>";
 print_r($programmingLanguages);
 echo "</pre>";

 // delete element from the first item
 array_shift($programmingLanguages);

 echo "<pre>";
 print_r($programmingLanguages);
 echo "</pre>";