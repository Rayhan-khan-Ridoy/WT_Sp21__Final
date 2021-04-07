<!DOCTYPE html>

 <?php

   if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        
        $username=$_POST["username"];
        $password=$_POST["password"];


         if ($username == "ridoy" && $password == "1234")
         {
               // setcookie("username",$username,time()+120);
                session_start();
                $_SESSION["username"] = $username;
                header("Location: dashboard.php");

                             }
                         
                     
                        
       
   }     
                
             
        
        ?>

<html>

<head>
    
    <title>finalterm-lab1</title>

    
</head>

<body>

    
            <form action="" method="post">
           
			<table> 
			
				
       <tr>
                    <td>  
                     <input type="text" placeholder="Enter Your UserName" value=" " name="username">
                            
                        
                    </td>
					
				</tr>
       <tr>
				<td>
                <input type="password" placeholder="Enter Your Password" name="password" >
                            
                        
                    </td>
					
				</tr>
                    </table>
              
                <input type="submit" name="submit" value="Log-In">
               
            </form>
        


</body>
    

</html>

    