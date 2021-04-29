<!DOCTYPE html>
<?php //require_once'models/db_directlyadd.php';
      require_once'models/db_config.php';


        



?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="csss/dashboard.css">

</head>
<body>

	
		<div class="section-info">
			<p style="text-align: center;font-size:30px;">Assalamuwalaikum Mr.  <?php echo $_COOKIE["username"] ?> , Welcome to Admin Dashboard </p>
		</div>

		<div class="services-row">
			<div class="services-box">
				
				<h2>Directly Add User</h2>

				<p>
					As a web designer I, works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. I always try to make a unique website.
				</p>
					<button  class="servicebox_btn"> <a href="adduser.php">Add</a></button>
                
                    

               
              
                
			</div>

			<div class="services-box">
				
				<h2>Delete User</h2>
				<p>I have a huge experience about web development. I made lot web apps in past with django as well as php and javascripts.you can freely trust on my work as a web developer.javascripts.you can freely trust on my work as a web developer. I made lot web apps in past with</p>

				<button class="servicebox_btn">Delete</button>
			</div>
			
			<div class="services-box">
				
				<h2>Update Users </h2>
				<p>As a apps developer r I, works on the appearance, layout, and, in some cases, content of teh apps. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. I always try to make a unique apps.</p>
				<button class="servicebox_btn">Update</button>
			</div>
			

		</div>

		<div class="services-row">
			<div class="services-box">
				
				<h2>Check All Inbox or Complains</h2>

				<p>
					As a web designer I, works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. I always try to make a unique website.
				</p>
				<button class="servicebox_btn"><a href="inbox.php">Check here</a></button>
			</div>

				
			<div class="services-box">
				
				<h2>Make your Rules</h2>

				<p>
					As a web designer I, works on the appearance, layout, and, in some cases, content of a website. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. I always try to make a unique website.
				</p>
				<button class="servicebox_btn">Rules</button>
			</div>
			
			
			<div class="services-box">
				
				<h2>Send a message</h2>
				<p>As a apps developer r I, works on the appearance, layout, and, in some cases, content of teh apps. Appearance, for instance, relates to the colors, font, and images used. Layout refers to how information is structured and categorized. I always try to make a unique apps.</p>
				<button class="servicebox_btn"><a href="sendMessage.php">Send</a></button>
			</div>


		</div>
        
    <?php
    
    if(!isset($_COOKIE["username"])){
            header("Location:firstpage.php");
        }
       
        
        /*session_start();
        if(!isset($_SESSION["username"])){
            header("Location:.firstpage.php");
        }*/
        
        
      ?>
	

			

     
	
    

</body>
</html>