<?php
echo time() . "<br>";

echo date("Y-m-d H:i:s A");

// parse date
// $date = "2020-02-06 12:45:35";
// $parseDate = date_parse($date);

// echo "<br>";
// echo "<pre>";
// var_dump($parseDate);
// echo "</pre>";

// parse date from format
$date = "2020-02-06 12:45:35";
$parseDate = date_parse_from_format("dS m Y H:i:s", $date);

echo "<br>";
echo "<pre>";
var_dump($parseDate);
echo "</pre>";


// get default time zone
// echo "<br>";
// echo date_default_timezone_get();

date_default_timezone_set("Indian/Maldives");
echo date_default_timezone_get();


echo "<br>";
echo date("dS m Y H:i:s A");
?>