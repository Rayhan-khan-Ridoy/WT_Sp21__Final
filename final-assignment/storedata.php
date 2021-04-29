<style >

body
{
	background-image: url('image/storedata.png');
    background-repeat: no-repeat;
    background-size: cover;
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
   top: 43%;
   left: 7%;

}
	



</style>




<?php
	include ("dbconnection.php");
  $conn=connection();
	$in=mysqli_query ($conn,"SELECT* from reg ORDER by id DESC ");
  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Tabel View</title>
  </head>
  <body>



  	<table border="1" style="align-items: center; ">

  		<tr>
  			<th style="background-color:#7dcea0">Username</th>
  			<th style="background-color: #d4efdf">Password</th>
  			<th style="background-color:#7dcea0">Retype Password</th>
  			<th style="background-color: #d4efdf">Contact Number</th>
  			<th style="background-color:#7dcea0">Email</th>
  			<th style="background-color: #d4efdf">Address</th>
  			<th style="background-color:#7dcea0">Update</th>
  		</tr>
  		<?php

  		while ($res=mysqli_fetch_array($in))
  		{
  			echo '<tr>';
  			echo "<td bgcolor='#d4efdf'>".$res['username'].'</td>';
  			echo "<td bgcolor='#7dcea0'>".$res['pass'].'</td>';
  			echo "<td bgcolor='#d4efdf'>".$res['repass'].'</td>';
  			echo "<td bgcolor='#7dcea0'>".$res['cnumber'].'</td>';
  			echo "<td bgcolor='#d4efdf'>".$res['email'].'</td>';
  			echo "<td bgcolor='#7dcea0'>".$res['address'].'</td>';
  			echo "<td bgcolor='#fef9e7'><a href='profile_update.php?id=$res[id]'><font color='black'>Edit</a>";
  			echo "</tr>";
  		}
  		  ?>
  		
  	</table>



  </body>
  </html>