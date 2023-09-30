<?php
$a = 20;
$b = 30;

function add() {
    $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b']; 
}

add();
echo $z;