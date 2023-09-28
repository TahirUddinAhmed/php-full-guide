# Arrays in PHP
An array stores multiple values in one single variable: 

e.g 
```php
<?php
$names = array("Tahir", "John", "Peter", "Elon", "Mark");

echo $names[0]; // output: Tahir

?>
```

## What is an Array?
An array is a special variable, which can hold more than one value at a time. 

If you have a list of items ( a list of car names, for example), storing the cars in single variables could look like this: 

```php
$car1 = "BMW";
$car2 = "TATA";
$car3 = "Toyota";

```
However, what if you want to loop through the cars and find a specific one? and what if you had not 3 caars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number. 

## Create an Array in PHP
In PHP, the <span style="background-color: lightgrey; color: orange; padding: 4px; ">array()</span> function is used to create an array: 

```php
array();
```

in PHP, there are three types of arrays: 

 - <b>Indexed arrays</b> - Arrays with a numeric index.
 - <b>Associative arrays</b> - Arrays with named keys
 - <b>Multidimensional arrays</b> - Arrays containing one or more arrays.

## Get the length of an Array - the count() function
The count() function is used to return the length (the number of elements) of an array: 

e.g 
```php
<?php
$names = array("Tahir", "John", "Peter", "Elon", "Mark");

echo count($names);

?>
```

## PHP Indexed Arrays
There are two ways to create indexed arrays: 

The index can be assigned automatically (index always start at 0), like this: 

```php
$fruits = array("Mango", "Banana", "Apple");
```
or the index can be assigned manually: 

```php
$fruits[0] = "Mango";
$fruits[1] = "Banana";
$fruits[2] = "Apple";
```

## Loop through an Indexed Array
To loop through and print all the values of an indexed array, you could uses a for loop, like this;

```php
<?php
 $fruits = array("Mango", "Banana", "Apple");

 for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[i];
    echo "<br>"; // new line
 }
?>
```
Output: 
```
Mango
Banana
Apple
```

## Associative Arrays in PHP
Associative arrays are arrays that use named keys that you assign to them. 

There are two ways to create an associative array: 
```php
$age = array(
    "peter" => 35,
    "John" => 25,
    "Tahir" => 20
)
```
or: 
```php
$age["peter"] = 35;
$age['John'] = 25;
$age['Tahir'] = 20;
```

The named keys can then be used in a script: 
```php
$age = array(
    "peter" => 35,
    "John" => 25,
    "Tahir" => 20
);

echo "Tahirs age is" . $age['Tahir'];
```

## Loop through an associative array
To Loop through and print all the values of an associative array, you could use a foreach loop.

```php
$age = array(
    "peter" => 35,
    "John" => 25,
    "Tahir" => 20
);
// loop through an associative array
foreach($age as $key => $value) {
    echo "Key = " . $key . ", value = " . $value;
    echo "<br>"; // new line
}
```

## Multi-dimensional Array
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people. 

<pre>
The dimension of an array indicates the number of indices you need to select an element. 

 - For a two-dimensional array you need two indices to select an element. 
 - For a three-dimensional array you need three indices to select an element. 
</pre>

### PHP - Two-dimensional arrays. 
A two-dimensional array is an array of arrays ( a three-dimensional array is an array of array of arrays).

e.g: 
```php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("TATA", 5, 2),
    array("Land Rover", 17, 15)
)
```
## PHP - Sorting array
PHP - Sort functions for arrays

 - sort() - sort arrays in ascending order.
 - rsort() - sort arrays in descending order.
 - asort() - sort associative arrays in ascending order, according to the value
 - ksort() - sort associative arrays in ascending order, according to the key
 - arsort() - sort associative arrays in descending order, according to the value
 - ksort() - sort associative arrays in descending order, according to the key



## PHP - Array ( Delete element )
### Delete elements from the last 
```
array_pop();
```

e.g: 
```php
$nums = [12, 4, 45, 9, 71, 14];
array_pop($nums); // last element is delete which is 14
```
### Delete element from an specified position 

```
unset();
```

e.g: 

```php

unset($nums[2]); // delete element at position 2

```

### Delete element from the first item

```
array_shift();
```
e.g: 

```php
array_shift($nums); // first element is being deleted which is 12
```

## PHP - add element to an array

### PUSH elements to the end of the array

let the array is 

```php
 $languages = ['PHP', 'JAVA', 'C'];

 // add a new language the end of the array
 $language[] = 'CPP';

 // ['PHP', 'JAVA', 'C', 'CPP'];

```

Another way we can push an element to an array is using the array_push() method

```php
array_push($language, 'Python', 'Mojo🔥', 'React');

// Now the array is 
// ['PHP', 'JAVA', 'C', 'CPP', 'Python', 'Mojo🔥', 'React'];
```

### Check if an element is exist in an array or not

```
array_key_exists(key, arrays);
```
e.g: 
```php
$age = [
    'peter' => 19,
    'Tahir' => 20,
    'John' => 30
];

$ans = array_key_exists('Tahir', $age);
```

