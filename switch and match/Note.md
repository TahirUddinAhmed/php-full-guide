# PHP match statement 
The 'match' statement is a new control structure introduced in PHP 8.0. It provides a concise way to perform conditional checks and execute code based on the value of an expression. It's similar to the traditional 'switch' statement but offers some advantages, including type-safe comparisions and improved syntax. 

match expression does strick comparision while switch statement does loose comparision

e.g: 

```php
<?php

$httpCode = 404;

$message = match($httpCode) {
    200, 201, 204 => "Success"
    301, 302 => "Redirection",
    400, 401, 403 => "Client error",
    404 => "Not found",
    500 => "Server Error",
    default => "Unknown status code" 
};

echo "HTTP Code $httpCode: $message";

// output: HTTP Code 404: Not Found

?>
```