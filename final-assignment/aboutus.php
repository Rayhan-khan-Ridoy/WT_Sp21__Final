<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  #center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>‘Mess-meal management solution’ is complete solution for any kind of bachelor mess/Hostel. It also can be called as Hostel Meal Management system.</p>
  <p>We are Highly dedicated to serve our Service around you . We have a a good experience team to your service </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/admin1.jpg" alt="imran" style="width:50%; height: 250px; margin-left: auto;margin-right: auto; display: block;">
      <div class="container">
        <h2>Md.Imran Ahmed</h2>
        <p class="title">CEO & Founder</p>
        <p>He Found This Business in 2013</p>
        <span>Contact Infomation</span><br>
        <span>Number-<b>016-21553450</b></span><br>
        <span>Email-<b>iahmed682@gmail.com</b></span>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <img src="image/admin2.jpg" alt="redoy" style="width:50%; height: 250px; margin-left: auto;margin-right: auto; display: block;">
      <div class="container">
        <h2>Redoy Khan</h2>
        <p class="title">Co-Founder</p>
        <p>He is the co-founder of this business</p>
        <span>Contact Infomation</span><br>
        <span>Number-<b>019-51207052</b></span><br>
        <span>Email-<b>rdeoykhan31@gmail.com</b></span>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
       <img src="image/admin3.png" alt="redoy" style="width:50%; height: 250px; margin-left: auto;margin-right: auto; display: block;">
      <div class="container">
        <h2>Elen Musk</h2>
        <p class="title">Manager</p>
        <p>He is the manage of the business</p>
        <span>Contact Infomation</span><br>
        <span>Number-<b>019-XXXXXXXX</b></span><br>
        <span>Email-<b>XXXXXXXXX@gmail.com</b></span>
      </div>
    </div>
  </div>
</div>

</body>
</html>
