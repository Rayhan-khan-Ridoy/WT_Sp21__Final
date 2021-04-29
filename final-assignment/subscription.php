<?php
		include("dbconnection.php");
      	$conn=connection();
$package='';
$duration='';

if (isset($_POST['package']) && isset($_POST['duartion']) )
      {
      	
        $package=$_POST['package'];
        $duration=$_POST['duaration'];

        $result_result=mysqli_query($conn," INSERT INTO `subs`(`id`, `package`, `duration`) VALUES ('',$package,'$duartion') ");

      if ($result_result==True)
      {
        echo "sucessfull Save TO the Database";
      }
      else
      {
        echo "Errrrror";
      }
      

    }

  ?>


 <style >
 #pckg
 {
 	padding-top: 50px;
 	margin-left: 40%;
 }	
 #pckg1
 {
 	margin-left: 40%;

 }
 #pckg2
 {
 	margin-left: 40%;
 	padding-bottom: 20px;
 }


 </style>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Subscrption</title>
 </head>
 <body>

 	<div style="border-style: solid">
 	<div id="pckg">
 	<label>Choose Your Package</label>
 	 <select name="package" >
    <option value="gold">Gold</option>
    <option value="platimum">Platimum</option>
    <option value="silver">Silver</option>
  </select>
  </div> <br>

<div id="pckg1">
  <label>Choose Package Duration(days)</label>
  <select name="duration">

  	<option>1 Days</option>
  	<option>7 Days</option>
  	<option>15 Days</option>
  	<option>30 Days</option>
  	<option>60 Days</option>

  </select>

 </div> <br>
 <div id="pckg2">
 	<input type="submit" name="submit" value="Subscrption">
 	
 </div>


</div>


 
 </body>
 </html>