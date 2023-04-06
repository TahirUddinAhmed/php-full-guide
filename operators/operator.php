<?php
 
 /* OPERATOR */

 // arithmetic operator
 $x = 10;
 $y = 20;

 echo $x + $y;
 echo "<br>";

 // asignment operator
 $a = 5; $b = 2; 
 $b *= $a; // $b = $b * $a;
 echo $b;
 echo "<br>";

 // String operator(. .=)
 $x = "Hello";
 $x .=" World";
 echo $x;
 echo "<br>";
 // comparision operator (== === <> <==> ??) 
 $p = null;
 $y = $p ?? "Hello";
 echo $y;

