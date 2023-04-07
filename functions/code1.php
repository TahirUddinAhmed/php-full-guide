<?php
 function foo() {
    return "hello world";
 }

 $x = foo(); 
 echo $x;
 echo "<br>";

 function fun():int {
    return 1;
 }
 
 var_dump(fun());
 echo "<br>";
 function fun1():void {
    return;
 }
 var_dump(fun());
 echo "<br>";

 function fun2():int|float|array {
    return ['1', 2];
 }
 var_dump(fun2());
 echo "<br>";

 function fun3(): mixed {
    return "tahir";
 }
 var_dump(fun3());