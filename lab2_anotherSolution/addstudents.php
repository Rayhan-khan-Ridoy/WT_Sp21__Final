<html>
	<head></head>
	<body>
        <?php 
        require_once "connection1.php";
        
        $name="";
        $err_name="";
        $id="";
        $err_id="";
        $cgpa="";
        $err_cgpa="";
        $dob="";
        $err_dob="";
        $credit="";
        $err_credit="";
        $did="";
        $err_did="";
        $has_error=false;
        
      
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
               
                if(empty($_POST["name"])){

                     $err_name="* name required";
                     $has_error=true;
                 } 
                else{
                    $name=htmlspecialchars($_POST["name"]);
                   
              
                }
            
            
            if(empty($_POST["id"])){

                     $err_id="* id required";
                    $has_error=true;
                 }  
                else if(strlen($_POST["id"])<5)
                {
                    $err_id="* id should be at least 5 charecters";
                    $has_error=true;
                }
                else{
                    $id=htmlspecialchars($_POST["id"]);
                   
                   
                }
            
              if(empty($_POST["did"])){

                     $err_did="* dept-id required";
                  $has_error=true;
                 }  
                else if(strlen($_POST["did"])<2)
                {
                    $err_did="* dept-id should be at least 2 charecters";
                    $has_error=true;
                }
                else{
                    $did=htmlspecialchars($_POST["did"]);
                   
                   
                }
            
            
            if(empty($_POST["cgpa"])){

                    $err_cgpa="*cgpa required ";
                $has_error=true;
                }
           
             elseif(strpos($_POST["cgpa"]," "))
			 {
				 $err_cgpa="*cgpa must not contain spaces";
                 $has_error=true;
			 }
            else{   
               
                 $cgpa=($_POST["cgpa"]);
                   
                   
                }
            
              if(empty($_POST["dob"])){

                    $err_dob="*dob required ";
                  $has_error=true;
                }
           
        
            else{   
               
                 $dob=($_POST["dob"]);
                  
                   
                }
            
             if(empty($_POST["credit"])){

                    $err_credit="*credit required ";
                 $has_error=true;
                }
           
        
            else{   
               
                 $credit=($_POST["credit"]);
                    
                   
                }
        }
        
                
            $query= " INSERT INTO `db_students`(`name`, `id`, `dob`, `credit`, `cgpa`, `dept_id`) VALUES ('$name','$id','$dob','$credit','$cgpa','$did')" ;
            execute($query);
       
        
        ?>
            
            
        
        
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
                <td><span>id</span></td>
                <td> : <input type="text" name="id"  value="<?php echo $id ?>"> 
                    <br>
                <span><?php echo $err_id; ?></span>    
                </td>
                
            </tr>
          
                
            <tr>
                <td><span>dob </span></td>
                 <td>  : <input type="text" name="dob">
                    <br>
                <span><?php echo $err_dob; ?> </span>
                </td>
               
            </tr>
                  <tr>
                <td><span>credit </span></td>
                 <td>  : <input type="text" name="credit">
                    <br>
                <span><?php echo $err_credit; ?> </span>
                </td>
               
            </tr>
            
                  <tr>
                <td><span>cgpa </span></td>
                 <td>  : <input type="text" name="cgpa">
                    <br>
                <span><?php echo $err_cgpa; ?> </span>
                </td>
                      
                       <tr>
                <td><span>dept-id </span></td>
                 <td>  : <input type="text" name="did">
                    <br>
                <span><?php echo $err_did; ?> </span>
                </td>
               
            </tr>
                
            <tr>
                     <td></td>
                     <td> <input type="submit" name="register" value="add student"></td>
                
            </tr>
                
                </table>
            <?php if(!$has_error){
                  echo "added successfully" ;
                   } ; ?>
            

             </form>

          

       
    </body>
</html>