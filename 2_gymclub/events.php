<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   include_once ('session.php');

    if(isset($_SESSION['user_id']) =="") {
        header("Location: home.php");
    }
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <style>
table{
  width: 70%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>
</head>
<body>
      <h3 style="text-align: center; color:#1b2be254 "><em>Events</em></h3>
      <table style="width:100%">
        <tr>
          <th>Event</th>
          <th>Date</th> 
        </tr>
        <tr>
          <td> The Color Run Shine Tour</td>
          <td>29/02/2020</td>
        </tr>
        <tr>
          <td>Aquabiking</td>
          <td>06/03/2020</td>
        </tr>
        <tr>
          <td>Flash Mob Meetups</td>
          <td>15/03/2020</td>
        </tr>
        </table>
</body>
</html>