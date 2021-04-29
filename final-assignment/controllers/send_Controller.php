 <?php require_once'models/db_inbox.php';
   
   
	$ms="";
	$err_ms="";
	$email="";
	$err_email="";
    $date="";
    $err_date="";
	
	
	
	
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            
             if(empty($_POST["date"]))
			{
			 $err_date="* [enter date ]";
			}
			else
			{
			$date=htmlspecialchars($_POST["date"]);
			}
		
			
			if (empty($_POST["email"])){
				$err_email="*Email Required";
			 }
				elseif(!strpos($_POST["email"],'@'))
			 {
				 $err_email="@ needed for email";
			 }
			elseif(!strpos($_POST["email"],'.'))
			 {
				 $err_email="*dot(.) required";
			 }
			else{
                $a=strpos($_POST["email"],'@');
                $d=strpos($_POST["email"],'.');
                
                if($a<$d){
                    $email=htmlspecialchars($_POST["email"]);
                }
                else{
                  $err_email="* dot(.) cannot stay before (@) ";  
                }
				
			 }
			
			if(empty($_POST["m"]))
			{
			 $err_ms="[You must write something ]";
			}
			else
			{
			$ms=htmlspecialchars($_POST["m"]);
			}
            
           
		
		}
        
        

        $query="INSERT INTO `db_inbox`(`date`, `from`, `message`) VALUES ('$date','$email','$ms')";
        execute($query);




    ?>
