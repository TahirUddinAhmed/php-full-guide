<?php
// define all the input variable as empty
$name = $email = $website = $comment = $gender = $username = "";
$nameErr = $emailErr = $websiteErr = $genderErr = $usernameErr= "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // get the all input values
  if(empty($_POST['name'])) {
    $nameErr = "Name is Required!";
  } else {
    $name = test_input($_POST["name"]);
  }

  if(empty($_POST['email'])) {
    $emailErr = "Email is required!";
  } else {
    $email = test_input($_POST['email']);
  }

  if(empty($_POST['website'])) {
    $websiteErr = "Website is required!";
  } else {
    $website = test_input($_POST['website']);
  }

  if(empty($_POST['gender'])) {
    $genderErr = "gender is required";
  } else {
    $gender = test_input($_POST['gender']);
  }

  // username
  if(empty($_POST['username'])) {
    $usernameErr = "Username is required!";
  } else {
    $username = test_input($_POST['username']);

    if(!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
      $usernameErr = "white space are not allowed!, you can user userscore";
    }
  }

  $comment = test_input($_POST['comment']);


}

function test_input($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);

  return $input;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test form</title>
    <style>
      h1 {
        text-align: center;
      }
      .error-msg {
        color: red;
        padding: 4px 2px;
      }
      .err {
        color: red;
        padding: 2px;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid #ddd;
        width: 40%;
        margin: 0 auto;
        padding: 4rem 2rem;
      }
      input {
        margin-bottom: 12px;
      
      }
      input[type="submit"] {
        width: 100%;
        background: darkslategray;
        padding: 8px;
        border: none;
        font-size: 18px;
        color: white;
        cursor: pointer;
        margin-top: 17px;
      }
    </style>
</head>

<body>
  <h1>PHP form validation </h1>
  <p class="error-msg"></p>
  <div class="container">
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      Name: <input type="text" name="name" placeholder="enter your name">
      <span class="err"><?php echo $nameErr ?></span>
      <br>
      email: <input type="email" name="email" placeholder="enter your email">
      <span class="err"><?php echo $emailErr ?></span><br>
      username: <input type="text" name="username" placeholder="enter your username">
      <span class="err"><?php echo $usernameErr ?></span><br>
      website: <input type="text" name="website" placeholder="enter your website">
      <span class="err"><?php echo $websiteErr ?></span><br>
      comment: <input type="text" name="comment" placeholder="enter your comment"><br>
      Gender: 
      <input type="radio" name="gender" value="female">female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">other
      <span class="err"><?php echo $genderErr ?></span>
      <input type="submit" value="submit">
    </form>
  </div>

  <h2>Your Input: </h2>
  <?php 
    echo "Name : " . $name;
    echo "<br>";
    echo "email : " . $email;
    echo "<br>";
    echo "website : " . $website;
    echo "<br>";
    echo "comment : " . $comment;
    echo "<br>";
    echo "gender : " . $gender;
    echo "<br>";

  ?>  
</body>

</html>