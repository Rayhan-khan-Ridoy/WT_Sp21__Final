<!DOCTYPE html>
<?php require_once'controllers/regi_Controller.php';  ?>
<script src="controllers/regi_Controller_JS.js"></script>
<html lang="en">

<head>
 
    <title>login</title>
    
       <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="csss/registration.css" rel="stylesheet">
 

   

</head>

<body>
    <div class="bg"> 
        <div class="overlay"> </div>
            <div class="login">

              
               
  
        <fieldset>
	<legend ><h1>Sub-Admin Registration</h1></legend>
	<form action="" method="post" onsubmit="return validate()">
			<table class="table"> 
			<tr>
					<td ><span>Name </span></td>
					<td><input type="text" id="name" name="nname" value="<?php echo $nname ; ?>" placeholder="Enter your full name" >
						<span><br><?php echo $err_nname;?></span>
                        <br><span id="err_msg_name"></span>
                   </td>
                </tr>
				<tr>
					<td><span>Username </span></td>
					<td><input type="text" id="username" name="uname" value="<?php echo $uname ; ?>" placeholder="Enter your Username" >
						<span><br><?php echo $err_uname;?></span>
                        <br><span id="err_msg_username"></span>
                    </td>
				</tr>
				<tr>
					
				<tr>
					<td><span>Email</span></td>
					<td><input type="text" id="email" value="<?php echo $email;?>" placeholder="Enter your Email" name="email">
						<span><br><?php echo $err_email;?></span>
                        <br><span id="err_msg_email"></span>
                    </td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td><input type="text" id="code" name="code" size="4.5" placeholder = "Code" value="<?php echo $code;?>">-<input type="text" id="number" name="number" placeholder = "number" size="8" value="<?php echo $number;?>">
					<span><br><?php echo $err_code;?></span><span><br><?php echo $err_number;?></span>
                    <br><span id="err_msg_code"></span><br><span id="err_msg_number"></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
				<td><input type="text" id="saddress" name="stad" placeholder = "Street Address" size="19" value="<?php echo $stad;?>"placeholder="Street Address">
					<span><br><?php echo $err_stad;?></span>
                    <br><span id="err_msg_saddress"></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" id="city" name="city" placeholder = "City" value="<?php echo $cityad;?>" placeholder = "City" size="5"> - <input type="text" id="state" name="state" placeholder = "State" value="<?php echo $statead;?>" placeholder ="State" size="6">
					<span><br><?php echo $err_cityad;?></span><span><?php echo $err_statead;?></span>
                    <br><span id="err_msg_city"></span><br><span id="err_msg_state"></span></td>
				</tr>
				<tr>
					<td> <span></span></td>
					<td><input type="text" id="pocode" name="pocode" value="<?php echo $pocode;?>" placeholder = "Postal/Zip Code">
					<span><br><?php echo $err_pocode;?></span>
                    <br><span id="err_msg_pocode"></span></td>
				</tr>

				<tr>
				<td><span>Birth Date</span></td>
				
				<td><br> 
                    <br> 
                    <select name="day" style="background-color: black;color: gray;height: 34px;">
				<option disabled selected>Day</option>
					<?php
					for($i=1;$i<=31;$i++){
						echo "<option value = ",$i,">",$i,"</option>";
						
					}
					?>
					</select>
					
					<select name="month" style="background-color: black;color: gray;width: 76px;height: 34px;">
					<option disabled selected>Month </option>
					<?php
					$mont= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($month=0;$month<count($mont);$month++)
						{
							echo "<option>$mont[$month]</option>";
						}
					?>
				</select>
					
					<select name="year" style="background-color: black;color: gray;height: 34px;">
					<option disabled selected>Year </option>
					<?php
					for($z=1950;$z<=2050;$z++){
						echo "<option value =",$z,">",$z,"</option>";
					}
					?>
					
					</select>
						<span><br><?php echo $err_day;?></span>
						<span><br><?php echo $err_month;?></span>
						<span><br><?php echo $err_year;?></span>
				</td>
				
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><br><?php echo $err_gender;?></span>
                    </td>
				</tr>
				<tr>
				<td><span>Where did you hear about us? </span></td>
				<td>
					<input type="checkbox" name="hear[]" value="A Friend"><span>A Friend</span><br>
					<input type="checkbox" name="hear[]" value="Blog Post"><span>Blog Post </span><br>
					<input type="checkbox" name="hear[]" value="News Article"><span>News Article </span><br>
					<span><br><?php echo $err_hear;?></span></td>
				</tr>
				<tr>
					<td><span>Why do you want to be a sub admin?</span></td>
					<td><textarea name="bio" type="text" id="textarea" style="background-color:black ; padding:7px; color: white; margin-top: 5px;" ><?php echo $bio;?></textarea>
					<span><br><?php echo $err_bio ?></span>
                    <br><span id="err_msg_textarea"></span></td>
				</tr>
               
				<tr>
					<td></td><td><input type="submit" name="register "value="Register"></td>
				</tr>
			</table>
			
     </form>
            <h5>Or login With</h5>

                <span><a href="https://www.facebook.com/">Facebook</a></span>
                <span><a href="https://www.google.com/">Google</a></span>
                <span><a href="https://bd.linkedin.com/">Linkedin</a></span>
        </fieldset>
        

               
                  
                

           
        </div>
   </div>
    </body>
  
</html>
