# PHP Global variable - Superglobals
PHP superglobal variables are predefined global variables that are always available in all scopes throughout a script. They can be accessed from any function, class of file without having to do anything special. 

#### The PHP superglobal variables are: 

 - $GLOBALS
 - $_SERVER
 - $_REQUEST
 - $_POST
 - $_GET
 - $_FILES
 - $_ENV
 - $_COOKIE
 - $_SESSION

 ## PHP $GLOBALS 
 $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script ( Also from within functions or methods ).

 PHP stores all global variables in an array called $GLOBALS[index]. The <i>index</i> holds the names of the variable. 

e.g: 

```php
<?php

$a = 20;
$b = 37;

function add() {
    $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b']; 
}

add();
echo $z;

?>
```
In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!

