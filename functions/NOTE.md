# Functions in PHP
A function is a block of code that can be used repeatedly in a program. A function will not execute automatically when a page loads.
A function will be executed by a call to the function

## Create a function
Syntax: 
```php
function fun_name() {
    //code to be executed;
}
```
Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

E.g 
```php
<?php
 // function definition 
 function sayHello() {
    echo "Hello, everyone";
 }
 
 // function call
 sayHello();
 
?>
```

## PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, Just separate them with a comma. 

E.g: 
```php
<?php
 function addTwo($num1, $num2) {
    echo $num1 + $num2;
 }

 addTwo(5, 2);
 addTwo(7, 12); 
 addTwo(34, 21); 
 addTwo(11, 99);
?>
```

## PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is. 

PHP automatically associates a data type to the variable, depending on its value. Since the ddata types are not set in a strict sense, you can do things like adding a string to an integer without causing an error. 

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the <b>strict</b> declaration, it will throw a "Fatal Error" if the data type mismatches. 

In the following example we try to send both a number and string to the function without using strict: 

```php
<?php
 function addNum(int $a, int $b) {
    return $a + $b;
 }

 echo addNum(5, "7 Days");
 // since strict is NOT enabled "7 days" is changed to int(7), and it will return 12
?>
```

To specify <b>strict</b> we need to set <b>declare(strict_type=1)</b>. This must be on the very first line of the PHP file. 

```php
<?php
 declare(strict_types=1); // strict requirement

 function addNum(int $a, int $b) {
    return $a + $b;
 }

 echo addNum(5, "7 Days");
 // since strict is enabled "7 days" is not an integer, an error will be thrown
?>
```
The `strict` declaration forces thing to be used in the intended way.

## PHP Return Type Declarations 
PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requiment, it will throw a "Fatal error" On a type mismatch. 

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { ) bracket when declaring the function 

e.g
```php
<?php
 declare(strict_types=1); // strict requirement

 function addNum(float $a, float $b): float {
    return $a + $b;
 }

 echo addNum(5.2, 7.5);
 // since strict is enabled "7 days" is not an integer, an error will be thrown
?>

```

## Passign Arguments by Reference 
In PHP, arguments are usually pass by value, which means that a copy of thee value is used in the function and the varialble that was passed into the function cannot be changed. 

```php
function increment($n) {
    $n++;
} 

$a = 12;
increment($a);
echo $a;

// here a variable a is not increment because we pass the copy of the value not the actual variable

```

When a function argument is passed by reference, changes to the argument also change the varialble that was passed in. To turn a function argument into a reference, The `&` operator is used: 

```php
function increment(&$n) {
    $n++;
} 

$a = 12;
increment($a);
echo $a;

```


## Questions

1. Write a program that returns the sum of first n natural numbers
2. Define a function to find out if a number is prime or not. 
3. Write a program that will ask the user to enter his/her marks (out of 100). Define a method that will display grades according to the marks entered as below: <br/>
<pre> 
Marks        Grade 
91-100         AA 
81-90          AB 
71-80          BB 
61-70          BC 
51-60          CD 
41-50          DD 
<=40          Fail 
</pre>

4. Write a program to print the factorial of a number by defining a method named 'Factorial'.
Factorial of any number n is represented by n! and is equal to 1 * 2 * 3 * .... * (n-1) *n. E.g.- <br/>
<pre>
4! = 1 * 2 * 3 * 4 = 24 
3! = 3 * 2 * 1 = 6 
2! = 2 * 1 = 2 
Also, 
1! = 1 
0! = 1
</pre>


