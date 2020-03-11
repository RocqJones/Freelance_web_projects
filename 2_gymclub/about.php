<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>About Us</title>
<style>
    /* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
.content{
  text-align: center;
  color: rgb(0,0,255);
}
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">GymClub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
 <div class="content">
  <h3 style="color: rgb(0,255,0);"> About Us</h3>
    <p>
      <i>PerfectFit is an educative website that whose main objective is to assist people <br>
          who are looking forward to gain more knowlege about Health and Fitness.<br>
                We also offer consultancy services and advice<br>
                    in nutrition and physical fitness.</i>
  </p>
  </div>
  <div>
  <?php
  include ("footer.php");
  ?>
  </div>
</body>
</html>