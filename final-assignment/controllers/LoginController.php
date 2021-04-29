<?php 
require_once'models/db_config.php';

        
        $username="";
        $err_uname="";

        $password="";
        $err_password="";

        $haserror=false;
        
         function authenticateUser($username,$password){
                    $query="select * from db_adminlogin where username='$username' and password='$password'";
                    $rslt=get($query);
                    if(count($rslt)>0){
                        return $rslt[0];
                    }
                    else{
                        return false;
                    }
                }
    
         function checkUsernameValidity($username){
                    $query="select * from db_adminlogin where username='$username' ";
                    $rslt=get($query);
                    if(count($rslt)>0){
                        
                        return "true";
                    }
                    else{
                        
                        return "false";
                    }
                }

        /*   function checkPasswordValidity($password){
                    $query="select password from db_adminlogin where password='$password' ";
                    $rslt=get($query);
                    if(count($rslt)>0){
                        
                        return "true";
                    }
                    else{
                        
                        return "false";
                    }
                }
        
        */
       
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
                if (empty($_POST["uname"]))
                {
                    $err_uname="*Username is Required";
                    $haserror=true;
                }
                elseif (strlen($_POST["uname"])<6){
                    $err_uname="*Username must contain at least 6 characters ";
                    $haserror=true;
                }
                elseif (strpos($_POST["uname"],"  ")) {
                    $err_uname="*space is not allowed";
                    $haserror=true;
                }
                else{
                    $username=htmlspecialchars($_POST["uname"]);
                }


               if(empty($_POST["pass"])){

                    $err_password="*password required ";
                    $haserror=true;
                }
                else if(strlen($_POST["pass"])<8)
                {
                    $err_password="* password should be at least 8 charecters";
                    $haserror=true;
                }
                elseif(!strpos($_POST["pass"],"#"))
                {
				 $err_password="*Password must contain at least one special character # ";
                 $haserror=true;
                }
                elseif(strpos($_POST["pass"]," "))
                {
                    $err_password="*Password must not contain spaces";
                    $haserror=true; 
                }
                else{   
                    
                    
                   $password=htmlspecialchars($_POST["pass"]);
                    
                    
                    
                   
               }
                
              if(isset($_POST["btn_login"])){
                    if(authenticateUser($username,$password)){
                   // header("Location:admin_dashboard.php");
                        
                            setcookie("username",$username,time()+3);
                        
                            //session_start();
                           // $_SESSION["username"] = $username;
                            header("Location: admin_dashboard.php");

                        
                    }
              
               
               
}
}

             
        
        ?>
    