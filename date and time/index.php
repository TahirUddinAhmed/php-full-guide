<?php

echo "Tooday is " . date("dS M Y");


// change the date formate 

$date = date_create_from_format("d/m/Y", "15/03/2022");

// date formate
$change = date_format($date, "dS M Y");
echo "<br>";
echo $change;


// my date of birth 
$date = date_create_from_format("d/m/Y", "16/06/2004");

// change the date format 
echo "<br>";
$DOB = date_format($date, "D M Y");

echo $DOB;
?>