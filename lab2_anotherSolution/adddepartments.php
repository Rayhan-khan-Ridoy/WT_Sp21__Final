<html>
	<head></head>
	<body>
        <?php 
        require_once "connection2.php";
        
        $dname="";
        $err_dname="";
        $did="";
        $err_did="";
       
        $has_error=false;
        
      
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
               
                if(empty($_POST["dname"])){

                     $err_dname="* department name required";
                     $has_error=true;
                 } 
                else{
                    $dname=htmlspecialchars($_POST["dname"]);
                   
              
                }
            
            
            if(empty($_POST["did"])){

                     $err_did="*dept. id required";
                    $has_error=true;
                 }  
                else if(strlen($_POST["did"])<2)
                {
                    $err_did="* id should be at least 3 charecters";
                    $has_error=true;
                }
                else{
                    $did=htmlspecialchars($_POST["did"]);
                   
                   
                }
            
        }
        
                
            $query= "INSERT INTO `db_departments` (`departments`, `dept_id`) VALUES ('$dname', '$did')";
             
            execute($query);
        
        ?>
            
            
        
        
        <form action="" method="post">
            <table align="center">
                
                  <tr>
                        <td>
                            <span>Dept.Name </span>
                    
                        </td>
                      <td>
                            : <input type="text" name="dname" value="<?php echo $dname ?>"> 
                             <br>
                            <span><?php echo $err_dname; ?></span>  
                        </td>
                
                  </tr>
            
            <tr>
                <td><span>did</span></td>
                <td> : <input type="text" name="did"  value="<?php echo $did ?>"> 
                    <br>
                <span><?php echo $err_did; ?></span>    
                </td>
                
            </tr>
          
                
            
            <tr>
                     <td></td>
                     <td> <input type="submit" name="register" value="add dept"></td>
                
            </tr>
                
                </table>
            <?php 
            
             if(!$has_error){
                  echo "dept. added successfully" ;
                   } ;   
            
             ?>
            

             </form>

          

       
    </body>
</html>