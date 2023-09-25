# Form Handling in PHP

Q: What is the $_SERVER['PHP_SELF'] variable ?

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.

Q: What is the htmlspecialchars() functions?

The htmlspecialchars() function coverts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt ; and &gt ;. This prevents attackers from exploiting the code byy injecting HTML or Javascript code (Cross-site scripting attacks) in forms. 

## Big Note on PHP Form security
The $_SERVER["PHP_SELF"] variabel can be used by hackers!
If PHP_SELF is used in your page then a user can eneter a slash (/) and then some cross site scripting (XSS) commands to execute. 

Assume we have the following form in a page named "test_php.php": 

```php
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
```
Now, if a user enters the normal URL in the address bar "https://www.example.com/test_form.php", the above code will be translated to : 
```php
<form method="post" action="test_form.php">
```
So far, so good.
However, consider that a user enters the following URL in the address bar: 

```
http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
```

In this case, the above code will be translated to: 

```php
 <form method="post" action="test_form.php/">
 <script>alert('hacked') </script>
```


## How to avoid $_SERVER["PHP_SELF"] exploits?

$_SERVER['PHP_SELF'] exploits can be avoided by using the htmlspecialchars() function. 

```php
<form method="post" action="<?php echo htmlspecialchars($_SERVER["php"]); ?>">
```

## Validate Form Data with PHP 

The first thing we will do is to pass all variables through PHP'S htmlspecialchars() function. 

when we use the htmlspecialchars() function; then if a user tries to submit the sollowing in a text field: 

```javascript
<script>location.href('http://www.hacked.com')</script>
````
- this would not be executed, because it would be saved as HTML escaped code like this: 

```txt
&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;
````
The code is now safe to be displayed ona page orinside an e-mail. 

We will also do two more things when the user submits the form: 

 - Strip unnecessary characters(Extra space, tab, newline) from the user input data (with the PHP trim() function)
 - Remove backslashes(\) from the user input data (with the PHP stripslashes() function)

 The next step is to create a function that will do all the checking for us (which is musch more convenient than writing the same code over and over again).

 ```php 
  function check_input($data) {
    // remove unnecessary spaces, newline
    $data = trim($data);
    // remove backslashes(\)
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }

 ```

 ## PHP Forms - Required Fields

 In this stage we are submitted the form and print the result. Now We have to check whether all the fields all filled or not. 

To achieve this goal we have to create some variables to our code 

```php
$nameErr, $emailErr, $genderErr, $websiteErr
```

$comment field is optional. 

We have to add if else statement for each $_POST variable. This check if the $_POST variable is empty (With the PHP empty() function). If it is empty, an error message is stored in the different error variables, and if it is not empty it sends the user input data through the test_input() function: 



