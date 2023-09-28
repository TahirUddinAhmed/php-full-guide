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

// Two-dimensional array
$cars = array(
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("TATA", 5, 2),
  array("Land Rover", 17, 15)
);

// access elements 
for($i = 0; $i < count($cars); $i++) {
  for($j = 0; $j < 3; $j++) {
    echo $cars[$i][$j] . " ";
    
  }
  echo "<br>"; // new line
}


echo "Sorting arrays using php arrays functions - " . "<br>";
// sort arrays - using php arrays function
$nums = [12, 4, 99, 44, 65, 0, -1, -78, 124];
echo "before sort - <br>";
for($i = 0; $i < count($nums); $i++) {
  echo $nums[$i] . " ";
}
sort($nums);

echo "<br><br>"; // new line
echo "after sort - <br>";
for($i = 0; $i < count($nums); $i++) {
  echo $nums[$i] . " ";
}

