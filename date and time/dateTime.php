<?php
//  date and time 

$currentTime = time();
echo $currentTime . "<br>";

echo $currentTime + 5 * 24 * 60 * 60 . "<br>"; // time 5 days in the future
echo $currentTime - 60 * 60 *24 . "<br>";

echo date('d/m/Y g:ia') . "<br>";

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . "<br>";
echo date_default_timezone_get() . "<br>";
date_default_timezone_set('Asia/Kolkata');

echo date('d/m/Y g:ia') . "<br>";

echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . "<br>";

// Resouces
// Date Formate: https://www.php.net/manual/en/datetime.format.php
// Time zones: https://www.php.net/manual/en/timezones.php
// Relative Formate: https://www.php.net/manual/en/datetime.formats.relative.php
