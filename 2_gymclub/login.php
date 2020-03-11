<?php

session_start();
require_once "connect.php";

if(isset($_SESSION['user_id'])!="") {
    header("Location: workout.php");
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Get errors here
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyfields") {
        echo '<p class="loginerror">Fill in all fields!</p>';
      }
      else if ($_GET["error"] == "invalidmail") {
        echo '<p class="loginerror">Invalid e-mail!</p>';
      }
      else if ($_GET["error"] == "invalidpassword") {
        echo '<p class="loginerror">Invalid passwords!</p>';
      }
    }
    // if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    //     $email_error = "Please Enter Valid Email ID";
    // }
    // if(strlen($password) < 6) {
    //     $password_error = "Password must be minimum of 6 characters";
    // }  

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password). "'");
   if(!empty($result)){
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_fname'] = $row['fname'];
            $_SESSION['user_lname'] = $row['lname'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['username'];
            header("Location: login.php");
        } 
    }else {
        $error_message = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>login</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">GymClub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<div id="Frame0">
  <h1>Gym Club Login Page</h1>
</div>
<br>
<<form action="login.php" method="post">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
      <td colspan="2" align="center" valign="top"></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Email</td>
      <td><input type="email" name="email" required=""></td>
      <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input type="password" name="password"  required=""></td>
      <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="login" type="submit" value="Login" class="Button3"></td>
    </tr>
    </tr>
      <td colspan="2" align="center"><h4>Do not have an account?<a href="registration.php" class="btn btn-default">Register here</a></h4></td>
    </tr>
  </table>
</form>
</body>
</html>