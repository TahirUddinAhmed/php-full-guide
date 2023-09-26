<!-- // index array -->
<?php

$fruits = ["Mango", "Banana", "Apple"];

for($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "<br>"; // new line
}

// associative arrays
$age = array(
  "Tahir" => 20,
  "Peter" => 35,
  "John" => 25
);

echo "Tahir age is " . $age['Tahir'];
echo "<br>"; // new line

// loop through an associative array
foreach($age as $key => $value) {
    echo "Key = " . $key . ", value = " . $value;
    echo "<br>"; // new line
}