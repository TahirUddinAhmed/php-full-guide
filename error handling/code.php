<?php
//  trigger_error("Example error", E_USER_ERROR);
//  trigger_error("Example error", E_USER_WARNING);
//  echo 1;


// function errorHandler(
//     int $type, 
//     string $msg,
//     ?string $file = null,
//     ?int $line = null
// ) {
//     echo $type . ": " . "$msg" . " in " . $file . " on line " . $line;

//     exit;
// }
// error_reporting(E_ALL & ~E_WARNING);
// // error_reporting(E_ALL);

// set_error_handler('errorHandler', E_ALL);
// echo $x;

function errorHandler(
    int $type, 
    string $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo $type . ": " . "$msg";

    exit;
}

set_error_handler('errorHandler', E_ALL);
echo $tahir;