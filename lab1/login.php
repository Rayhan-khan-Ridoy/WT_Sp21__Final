<!DOCTYPE html>

 <?php

   if($_SERVER["REQUEST_METHOD"]=="POST"){
       
        
        $uname=$_POST["uname"];
        $password=$_POST["pass"];


         if ($uname=="ridoy" && $password=="1234")
         {
                setcookie("username",$uname,time()+120);
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
                     <input type="text" placeholder="Enter Your UserName" value=" " name="uname">
                            
                        
                    </td>
					
				</tr>
       <tr>
				<td>
                <input type="password" placeholder="Enter Your Password" name="pass" >
                            
                        
                    </td>
					
				</tr>
                    </table>
              
                <input type="submit" name="submit" value="Log-In">
               
            </form>
        


</body>
    

</html>

    