## PHP $_SERVER 
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

Here are some common elements of $_SERVER with examples: 

 1. $_SERVER['PHP_SELF']: This element contains the filename of the currently executing script, relative to the document root. 

 ```php
 echo $_SERVER['PHP_SELF']; // return the filename of the currently executing script.
 // OUTPUT: /example.php 
 ```

 2. $_SERVER['SERVER_NAME']: This element contains the server's hostname: 

 ```php
 echo $_SERVER['SERVER_NAME']: // return the name of the host server
 // output: www.tahiruddinahmed.com

 ```

 3. $_SERVER['HTTP_USER_AGENT']: This element contains the user agent string of the client's browser. 

 ```php
 echo $_SERVER['HTTP_USER_AGENT'];
 // output: Mozilla/5.0 
 ```

 4. $_SERVER['REQUEST_METHOD']: this element contains the HTTP request method used by the client (e.g.., GET, POST, PUT, DELETE);

 ```php
 echo $_SERVER['REQUEST_METHOD'];

 // output: GET
 ```
 
 5. $_SERVER['REMOTE_ADDR']: This element contains the IP address of the client making the request. 

 ```php
 echo $_SERVER['REMOTE_ADDR'];

 // Output: 192.168.1.100
 ```

 6. $_SERVER['SERVER_PORT']: This element contains the prot on which the server is running. 

 ```php
 echo $_SERVER['SERVER_PORT'];

 // output: 80
 ```

 7. $_SERVER['QUERY_STRING']: This element contains the query string porting of the URL, if any. 

 ```php
 echo $_SERVER['QUERY_STRING'];

 // output: id=123&name=john
 ```

 8. $_SERVER['HTTP_REFERER']: This element contains the URL of the referring page, if available. 

 ```php
 echo $_SERVER['HTTP_REFERER'];

 // output: http://www.example.com/referer.php
 ```

 9. $_SERVER['HTTP_HOST']: This element contains the HTTP host header sent by the client. 

 ```php
 echo $_SERVER['HTTP_HOST'];

 // output: http://www.example.com
 ```

 10. $_SERVER['HTTP_ACCEPT_LANGUAGE']: This element contains the client's preferred language. 

 ```php
 echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
// Output: en-US,en;q=0.9,fr;q=0.8

 ```

 11. $_SERVER['SCRIPT_URI']: Return the URI of the current page. 