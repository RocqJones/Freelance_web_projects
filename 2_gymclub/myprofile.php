<?php

   session_start();
   include_once ('session.php');

    if(isset($_SESSION['user_id']) =="") {
        header("Location: home.php");
    }


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
  <br>
 <table class="table table-sm">
  <thead>
    <tr>
      <th scope="">Fisrt Name</th>
      <th scope="Last Name">Last Name</th>
      <th scope="Email">Email</th>
      <th scope="Username">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_SESSION['user_fname']?></td>
      <td><?php echo $_SESSION['user_lname']?></td>
      <td> <?php echo $_SESSION['user_email']?></td>
      <td> <?php echo $_SESSION['user_name']?></td>
    </tr>
  </tbody>
</table>
<div>
  <?php
  include ("footer.php");
  ?>
</div>
</body>
</html>
