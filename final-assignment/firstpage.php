<!DOCTYPE html>
<?php require_once'controllers/LoginController.php';  ?>
<script src="controllers/LoginController_JS.js"></script>
<script src="controllers/ajaxfirstpage.js"></script>

<html>

<head>
    
    <title>finalterm</title>


    <link rel="stylesheet" href="csss/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        
    
</head>

<body>

    <div class="block1">

        <nav>
            <span><b class="logo">BACHEALOR'S ZONE</b> </span>
            <ul>
                <li>
                    <a href="#">
                        <h5>Home</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>About</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Rules</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Meals</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Transactions</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Bazars</h5>
                    </a>
                </li>
                <li class="button"><a href="registration_page.php"><input type="submit" value="Sub-admin Registration"></a></li>
            </ul>
        </nav>

        <div class="blockline"></div>

        <div class="block1leftbox">
            <h1 align="center">WELLCOME IN THE BIGGEST  </h1>
            <span>ONLINE</span>
            <h2>MESS MANAGEMENT SYSTEM OFFICIAL SITE</h2>


            <p align="center">It will be an Amazing Place to You. Make your Mess Smart and Simple. Just get rid of from all kinds of Mess resposibility in old manual ways . You can easily handle all works Smartly by this site.<br><br>So just Get Registered your-self for free and say TATA BYE BYE to all hassle.</p>
        </div>

        <div class="block1rightbox">
            
            <form action="" method="post" onsubmit="return validate()">
                <h3>Please fill form below and</h3>
                <h3>Get started with us !</h3><br>
           
			<table> 
			
				
				<tr>
                    <td>  <div class="icondiv1">
                            <i class="fa fa-user icon"></i>
                            <input  type="text" id="username" onfocusout="checkUsername(this)" placeholder="Enter Your UserName" value="<?php echo $username ?>" name="uname">
                        
                            </div>
                            <br><span><?php echo $err_uname;?></span>
                        <br>  <span id="err_msg_username"> </span>
                            
                    </td>
					
				</tr>
                <tr>
					<td> <div class="icondiv2">
                            <i class="fa fa-key icon"></i>
                            <input type="text" id="password"  placeholder="Enter Your Password" value="<?php echo $password ?>" name="pass">
                            
                        </div>
                        <br><span><?php echo $err_password;?></span>
                          <br><span id="err_msg_password"></span>
                    </td>
					
				</tr>
                    </table>
              
                <input type="submit" class="lastbtn" name="btn_login" value="Log-In as Admin"><span><br><a href="landingpage.php">OR Go To User Panel</a></span>
                <h4>Free Registration period untill <br> 31-december2021</h4>
                <h4>Download our mobile app !</h4>
            </form>
        </div>

    </div>


   
    


</body>
    

</html>
