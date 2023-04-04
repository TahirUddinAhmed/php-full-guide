<?php
 $programmingLanguage = ['C++', 'Javascript', 'PHP'];
 $name = "Tahir";

 echo $name[-1] . "<br>"; // get the last character

 $programmingLanguage[1] = "HTML";
//  echo $programmingLanguage[3];
 var_dump(isset($programmingLanguage[3]));
 echo "<pre>";
 print_r($programmingLanguage);
 echo "</pre>";

 // push elements to the end of the array
 $programmingLanguage[] = 'SQL';

 echo "<pre>";
 print_r($programmingLanguage);
 echo "</pre>";

 // another way to push an element to an array
 array_push($programmingLanguage, 'React', 'Typescript', 'java', 'python');

 echo "<pre>";
 print_r($programmingLanguage);
 echo "</pre>";

 
