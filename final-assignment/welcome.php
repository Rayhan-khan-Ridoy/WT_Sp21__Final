
<?php

session_start();
if ($_SESSION['username'])
{

}
else
{
    header('location:signin.php');
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .bs-example{
      margin: 20px;
    }
body {
  font-family: "Lato", sans-serif;
  background-image: url("image/bg.jpg");
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.blog
{
  position:relative; 
  top: 10px;
  padding-left:50px; 
  display:inline-block;
}
.im
{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <button class="openbtn" onclick="openNav()" style="">☰ Menu</button> 
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" id="home">Home</a>
                </li>
                <li class="nav-item">
                    <a href="add_product.php" class="nav-link">Add Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Inbox</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                        <a href="#" class="dropdown-item">Sent Items</a>
                        <div class="dropdown-divider"></div>
                        <a href="#"class="dropdown-item">Trash</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo ($_SESSION ['username']);?></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="changepass.php" class="dropdown-item">change password</a>
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" style="color: white; font-size: 20px;">Registration</a>
  <a href="subscription.php" style="color: white; font-size: 20px;">Subsciption</a>
  <a href="complain.php" style="color: white; font-size: 20px;">Complain</a>
  <a href="contact.php" style="color: white; font-size: 20px;">Contact</a>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<span style="margin-left: 45%;color: black;">Daily Blog</span> <br> <br>
<span class="blog" id="home">
    Healthy food blogs and Instagram-worthy recipes inspire home cooks everywhere to prepare their own delicious and nutritious meals at home. But it's not just stunning food photography that amasses a following.
    Many people rely on healthy food bloggers for their innovative recipes, mindful eating strategies, nutrition tips, and kitchen hacks to improve their cooking skills and support their overall wellness.
    With so many food blogs to choose from, it can be overwhelming to narrow it down. That's why we curated this list of healthy food blogs featuring some of the industry's most talented influencers and nutrition experts. You'll find that many of these blogs are run by registered dietitians and feature credible, evidence-based nutrition and health information to educate, inform, and inspire their followers.

    From kid-friendly meals to budget-conscious recipes to healthy desserts and gluten-free living, here are 40 of the best healthy food blogs you need to follow. 
</span> <br><br>
<h3 style="text-align: center">Healthy Food</h3>

<img src="image/food.jpeg" class="im">




</body>
</html>       

