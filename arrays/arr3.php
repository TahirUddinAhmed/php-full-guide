<?php
 // array keys
 $array = [
    'a' => 1,
    'b' => null
];

// array_key_exists();
var_dump(array_key_exists('a', $array));
var_dump(isset($array['a']));

echo "<br>"; // new line

var_dump(array_key_exists('b', $array));
var_dump(isset($array['b']));