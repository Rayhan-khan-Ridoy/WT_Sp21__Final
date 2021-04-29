<!DOCTYPE html>
<?php require_once'controllers/send_Controller.php';   ?>
<script src="controllers/send_Controller_JS.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
<html lang="en">

<head>
 
    <title>login</title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    
 

   

</head>

<body>
    <div class="bg" style="background-color:#3d9951;"> 
      
         

              
               
  
        <fieldset >
	<legend align="center"><h1>Send Message</h1></legend>
	<form action="" method="post" id="send" onsubmit="return validate()">
			<table class="table" align="center">
                
                <tr>
					<td ><span>Date </span></td>
					<td><input type="text" id="date" name="date" value="<?php echo $date ; ?>" placeholder="Enter the Date" >
						<span><br><?php echo $err_date;?></span>
                        <br><span id="err_msg_date"></span>
                </td>
                </tr>
                
			<tr>
					<td ><span>To </span></td>
					<td><input type="text" id="email" name="email" value="<?php echo $email ; ?>" placeholder="Enter E-mail" >
						<span><br><?php echo $err_email;?></span>
                        <br><span id="err_msg_email"></span>
                </td>
                </tr>
                
                
				
				<tr>
					<td><span>Write Your Message:</span></td>
                    
					<td><textarea name="m" id="textarea" type="text" style="background-color:black ; padding:7px; color: white; margin-top: 5px;" ><?php echo $ms;?></textarea>
					<span><br><?php echo $err_ms ?></span>
                    <br><span id="err_msg_textarea"></span>
                    </td>
                   
				</tr>
				<tr>
					<td></td><td><input type="submit" id="submit" name="send "value="send" ></td>
				</tr>
			</table>
			
     </form>
            
       <script>
                
             
        $('#send').on('submit',function(e){
         e.preventDefault();
            
            $.ajax({
                type:'post',
                data:$("#send input").serialize()
              
            });
            
            
            
        }) ; 
                
        </script> 
            
        </fieldset>
        

               
                  
                

           
        </div>
  
    </body>