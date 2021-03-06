<style>
body
{
    
    background-repeat: no-repeat;
    background-size: cover;
    background-color: white;
}
.vid
{
  height: 300px;
  width: 600px;
  margin-left: 25%;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
  height: 300px; 
  /* Should be removed. Only for demonstration */
  margin-right: 2%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: white;font-size: 20px;">Meal Management  System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="aboutus.php">About us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3 style="background-color: black; color: white; text-align: center;">Feel Hungry Right ? </h3>
  <video class="vid" controls>
    <source src="video/main.mp4" type="video/mp4">
  </video>
</div>


<h2 style="text-align: center;">Our Packages</h2>

<div class="row" style="margin-left:3%">
  <div class="column" style="background-color:white; border-style: solid">
    <h2 style="background-color: #ffd700; text-align: center;">Mothly Pakage </h2>
    <span style="font-size: 18px">??? Cheap Meal Rate</span> <br>
    <span style="font-size: 18px">??? Fast Delivary </span> <br>
    <span style="font-size: 18px">??? 3 Times Food</span> <br>
    <span style="font-size: 18px">??? Extra Afternoon Snackes</span> <br>
    <span style="font-size: 18px">??? Extra 2 times food per month</span> <br>
    <span style="font-size: 18px">??? 24x7 Cutomers Service</span> <br> <br>
    <button style=" margin-left: 35%; width:30%"><a href="signin.php"> Subscribe </a></button>
  </div>


  <div class="column" style="background-color:white; border-style: solid">
    <h2 style="background-color: #e5e4e2; text-align: center;">Weekly Package</h2>
    <span style="font-size: 18px">??? Cheap Meal Rate</span> <br>
    <span style="font-size: 18px">??? Fast Delivary </span> <br>
    <span style="font-size: 18px">??? 3 Times Food</span> <br>
    <span style="font-size: 18px; color: red">??? No Extra Afternoon Snackes</span> <br>
    <span style="font-size: 18px; color: red">??? No Extra 2 times food per month</span> <br>
    <span style="font-size: 18px">??? 24x7 Cutomers Service</span> <br> <br>
    <button style=" margin-left: 35%; width:30%"><a href="signin.php"> Subscribe </a></button>
  </div>


  <div class="column" style="background-color:white; border-style: solid">
    <h2 style="background-color: #cd7f32; text-align: center">Daily pakage</h2>
    <span style="font-size: 18px">??? Cheap Meal Rate</span> <br>
    <span style="font-size: 18px">??? Fast Delivary </span> <br>
    <span style="font-size: 18px">??? 3 Times Food</span> <br>
    <span style="font-size: 18px; color: red">??? No Extra Afternoon Snackes</span> <br>
    <span style="font-size: 18px; color: red">??? No Extra 2 times food per month</span> <br>
    <span style="font-size: 18px">??? 24x7 Cutomers Service</span> <br> <br>
    <button style=" margin-left: 35%; width:30%;"><a href="signin.php"> Subscribe </a></button>
  </div>
</div>

</body>
</html>
