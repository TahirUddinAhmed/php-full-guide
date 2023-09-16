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