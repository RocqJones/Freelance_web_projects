<?php
   require_once "connect.php";
   session_start();
   include_once ('session.php');

    if(isset($_SESSION['user_id']) =="") {
        header("Location: home.php");
    }
   $sql = "SELECT fname, lname, email, username, city,state FROM users";
   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result)>0){
      echo '<table class="table">';
      echo '<thead class="thead-light">';
          echo"<tr>";
            echo '<th scope="col">First Name</th>';
            echo '<th scope="col">Last Name</th>';
            echo  '<th scope="col">Email Address</th>';
            echo '<th scope="col">Username</th>';
            echo '<th scope="col">City</th>';
            echo '<th scope="col">State</th>';
          echo"</tr>";
      echo "</thead>";
      echo"<tbody>";

    while ($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>". $row["fname"] . "</td><td>". $row["lname"] . "</td><td>". $row["email"] . "</td><td>". $row["username"] . "</td><td>". $row["city"] . "</td><td>". $row["state"] . "</td></tr>";
    }
    echo "</table>";
   }
   else{
    echo "0 result!";
   }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Users</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
 
</body>
</html>
