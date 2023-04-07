<?php 
  ob_start();

  // output some content
  echo "Hello, world!";

  // store the output in a variable 
  $output = ob_get_contents();

//   // clean the output buffer
  ob_end_clean();

  // modify the output
  $output = str_replace("world", "PHP", $output);

  // send the modfied output to the browser 
  echo $output;

?>