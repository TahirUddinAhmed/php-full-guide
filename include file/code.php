<?php

/* require / require_once / include / include_once */
// include 'file.php';
// echo "Hello world";

// require 'file.php';
// echo "hello world";

// this mean the file included in one time
// $x = 5;
// require_once 'file.php';
// echo $x . "<br>";
// require_once 'file.php';
// echo $x . "<br>";


// $x = 5;
// require 'file.php';
// echo $x . "<br>";
// require 'file.php';
// echo $x . "<br>";

ob_start();
include 'inc/nav.php';
$nav = ob_get_clean();
$nav = str_replace('About', 'About Us', $nav);
echo $nav;