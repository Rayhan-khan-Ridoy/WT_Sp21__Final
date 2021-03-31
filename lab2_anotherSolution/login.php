<html>
	<head></head>
	<body>
        <?php 
        require_once "connection.php";
        
        $name="";
        $uname="";
        $err_name="";
        $err_uname="";
        $password="";
        $err_password="";
        
      
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
               
                if(empty($_POST["name"])){

                     $err_name="* name required";
                 } 
                else{
                    $name=htmlspecialchars($_POST["name"]);
              
                }
            
            
            if(empty($_POST["uname"])){

                     $err_uname="* username required";
                 }  
                else if(strlen($_POST["uname"])<5)
                {
                    $err_uname="* username should be at least 6 charecters";
                }
                else{
                    $uname=htmlspecialchars($_POST["uname"]);
                   
                   
                }
            
            
            if(empty($_POST["pass"])){

                    $err_password="*password required ";
                }
            else if(strlen($_POST["pass"])<6)
                {
                    $err_password="* password should be at least 8 charecters";
                }
            
             elseif(strpos($_POST["pass"]," "))
			 {
				 $err_password="*Password must not contain spaces";
			 }
            else{   
               
                 $password=($_POST["pass"]);
                      
                   
                }
        }
                
        $query="select * from db_firstdatabase where username='$uname' and password='$password' " ;
        
        $result=get($query);
        
        if(count($result)>0){
            header("Location:dashboard.php");
        }else{
            echo "password or username invalid";
        }
                ?>
        
        
        
        <fieldset align="center">   
            
          <legend><h2>lab-2 task login page</h2></legend>  
            
		<form action="" method="post">
            <table align="center">
                
                  <tr>
                        <td>
                            <span>Name </span>
                    
                        </td>
                      <td>
                            : <input type="text" name="name" value="<?php echo $name ?>"> 
                             <br>
                                <span><?php echo $err_name; ?></span>  
                        </td>
                
                  </tr>
            
            <tr>
                <td><span>Username</span></td>
                <td> : <input type="text" name="uname"  value="<?php echo $uname ?>"> 
                    <br>
                <span><?php echo $err_uname; ?></span>    
                </td>
                
          </tr>
          
                
            <tr>
                <td><span>Password </span></td>
                 <td>  : <input type="password" name="pass">
                    <br>
                <span><?php echo $err_password; ?> </span>
                </td>
               
            </tr>
            <tr>
                     <td></td>
                     <td> <input type="submit" name="register" value="Login"></td>
                
            </tr>
                
                </table>
        </form>
            </fieldset>
       
    </body>