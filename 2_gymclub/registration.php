
<?php
  require_once "connect.php";
  session_start();


    if (isset($_POST['signup'])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 

        if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
            echo "Name must contain only alphabets and space";
        }
        if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
            echo "Name must contain only alphabets and space";
        }
       if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
           echo "Please Enter Valid Email ID";
        }
       if(strlen($password) < 6) {
           echo "Password must be minimum of 6 characters";
        }       
        if($password != $cpassword) {
            $cpassword_error = "Password and Confirm Password doesn't match";
        }
            if(mysqli_query($conn, "INSERT INTO users(fname, lname,email, username, address, city, state, password,cpassword) VALUES('" . $fname . "','" . $lname . "', '" . $email . "', '" . $username . "','" . $address . "','" . $city . "','" . $state . "', '" . md5($password) . "','" . md5($cpassword) . "')")) {
        
             header("location: login.php");
             exit();
            } else {
               echo "Error: " . "" . mysqli_connect_error();
            }
      
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Sign Up</title>
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
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<div id="Frame0">
  <h1>Gym Club Registration Form</h1>
<br>
<form action="registration.php" method="post">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <tr>
      <td colspan="2" align="center" valign="top"></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Registration Form</h3></td>
    </tr>
    <tr>
      <td align="right">First Name</td>
      <td><input name="fname" type="text" class="Input" required=""></td>
    </tr>
    <tr>
      <td align="right">Last Name</td>
      <td><input name="lname" type="text" class="Input" required=""></td>
    </tr>
    <tr>
      <td align="right">Email Address</td>
      <td><input name="email" type="email" class="Input" required=""></td>
    </tr>
    <tr>
      <td align="right">Username</td>
      <td><input name="username" type="text" class="Input" required=""></td>
    </tr>
    <tr>
      <td align="right">Address</td>
      <td><input name="address" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">city</td>
      <td><input name="city" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">State</td>
      <td><input name="state" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="password" type="password" class="Input" required=""></td>
      <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
    </tr>
    <tr>
      <td align="right"> Confirm Password</td>
      <td><input name="cpassword" type="password" class="Input" required=""></td>
      <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input name="signup" type="submit" value="signup" class="Button3"></td>
    </tr>
      <td colspan="2" align="center"><h4>Already have a account?<a href="login.php" class="btn btn-default">Login</a></h4></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>