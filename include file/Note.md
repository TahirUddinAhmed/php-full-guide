# PHP include / require / require_once / include_once

PHP allows us to create various elements and functions, which are used several times in many pages. It takes much time to script these functions in multiple pages. Therefore, use the concept of file inclusion that helps to include files in various programs and saves the effort of writing code multiple times. 

PHP allows you to include file so that a page content can be reused many times. It is very helpful to include files when you want to apply the same HTML or PHP code to multiple pages of a website. 

There are two ways to include file in PHP. 

  1. include 
  2. require 

1. inlcude: 
    - 'include' includes a file and continues executing the script even if the included file is not found or contains errors. 
    - It is commonly used for including files that are not crucial for the script to run. 
    - If the file is not found, a warning is issued, but the script continues. 

  ```php
  inlcude("file.php");
  ```

2. require: 
   - require includes a file and halts script executing if the included file is not found or contains errors. 
   - It is used for including files that are critical for the script to run successfully. 
   - If the file is not found or conntains error, it results in a fatal error, and the script terminates. 

```php
 require("files.php");
```

3. include_once: 
  - 'include_once' includes a file only once, even if its called multiple times in the script. 
  - It is used when you want to prevent including the same file multiple times to avoid redeclaration errors. 

```php
 include_once 'files.php';
 include_once 'files.php';
```
it is only include once. 

4. require_once: 
  - 'require_once' is similar to 'include_once' but halts script execution if the file is not found or contains errors, just like 'require' 
  - It's used for including critical files only once to prevent redeclaration errors. 

  ```php
    require_once 'files.php'
  ```
