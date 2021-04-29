<style >

body
{
	background-image: url('image/storedata.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #008CBA;
}

table
{
   table-layout: fixed;
   width: 85%;
   border-collapse: collapse;
   border: 3px solid purple;
   text-align: center;
   margin-left:auto; 
   margin-right:auto;
   position: absolute;
   top: 28%;
   left: 7%;

}
.btn {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #4CAF50;
  margin-left: 40%;
  margin-top: 7%;
}

	



</style>




<?php
	include ("dbconnection.php");
  $conn=connection();
	$in=mysqli_query ($conn,"SELECT* from complain ORDER by id DESC ");
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Tabel View</title>
  </head>
  <body>

    <input type=button onClick="location.href='welcome.php'"value='Return Dashboard' class="btn">
    <h3 style="text-align: center; margin-right: 8%;  text-decoration: underline; color:white">All Complains</h3>



  	<table border="1" style="align-items: center; ">

  		<tr>
  			<th style="background-color:#7dcea0">Name</th>
  			<th style="background-color: #d4efdf">Email</th>
  			<th style="background-color:#7dcea0">Message</th>
  		<?php

  		while ($res=mysqli_fetch_array($in))
  		{
  			echo '<tr>';
  			echo "<td bgcolor='#d4efdf'>".$res['name'].'</td>';
  			echo "<td bgcolor='#7dcea0'>".$res['email'].'</td>';
  			echo "<td bgcolor='#d4efdf'>".$res['address'].'</td>';
  			echo "</tr>";
  		}
  		  ?>
  		
  	</table>


  </body>
  </html>