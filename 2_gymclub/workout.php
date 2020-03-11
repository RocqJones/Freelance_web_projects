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
<title>Workouts</title>
 <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;

}
img {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 5px;
  width: 150px;
  height: 200px
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>
<div>
      <div class="row">
  <div class="column">
    <div class="content">
    	
      <img src="images/img1.jpg" alt="Fitness" style="width:100%">
      <h3>My Work</h3>
      <p>Endurance, or aerobic, activities increase your breathing and heart rate. They keep your heart, lungs, and circulatory system healthy and improve your overall fitness. Examples include brisk walking, jogging, swimming, and biking. Strength, or resistance training, exercises make your muscles stronger.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/bg1.jpg" alt="Fitness" style="width:100%">
      <h3>Get some regular exercise</h3>
      <p>Exercise can help keep your body at a healthy weight. Exercise helps people lose weight and lower the risk of some diseases. Exercising regularly decreases a person's risk of developing certain diseases, including obesity, type 2 diabetes, and high blood pressure</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/bg2.jpg" alt="Fitness" style="width:100%">
      <h3>Attend Gym session</h3>
      <p>Regular physical activity can improve your muscle strength and boost your endurance. Exercise delivers oxygen and nutrients to your tissues and helps your cardiovascular system work more efficiently. </p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="images/bg3.jpg" alt="Fitness"style="width:100%">
      <h3>Building muscles</h3>
      <p>Weight lifting is usually associated with building muscle mass, but you can increase your muscle size and strength with calisthenic exercises like push-ups. When doing a push-up, muscles used includes pecs, triceps, biceps, quadriceps and core muscles.</p>
  </div>
  </div>
<div>
  <?php
  include ("footer.php");
  ?>
</div>
</body>
</html>