<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // collect value of input field
    $name = $_REQUEST['name'];

    echo "Hello, " . $name;
}