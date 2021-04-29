<?php require_once'models/db_directlyadd.php';
    
   

	$nname="";
	$err_nname="";
	$uname="";
	$err_uname="";
	$password="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$number ="";
	$err_number="";
	$stad="";
	$code="";
	$err_code="";
	$err_stad="";
	$cityad="";
	$err_cityad="";
	$statead="";
	$err_statead="";
	$pocode="";
	$err_pocode="";
	$dob="";
	$err_dob="";
	$day="";
	$err_day="";
	$mmonth="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$special="";
    $newspecial="";
	$err_special="";
	$comment="";
	$err_comment="";
	
	
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			if (empty($_POST["nname"])){
				$err_nname="*Name is Required";
			}
			else{
				$nname=htmlspecialchars($_POST["nname"]);
			}
			if (empty($_POST["uname"])){
				$err_uname="*Username is Required";
			}
			elseif (strlen($_POST["uname"])<6){
				$err_uname="*Username must contain at least 6 characters ";
			}
			elseif (strpos($_POST["uname"],"  ")) {
				$err_uname="*space is not allowed";
			}
			else{
				$uname=htmlspecialchars($_POST["uname"]);
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
                
			/*if (empty($_POST["email"])){
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
				
			 } */
            
			if (empty($_POST["number"])){
				$err_number="*Phone Number Required";
			 }
			else{
				$number=htmlspecialchars($_POST["number"]);
			 }
			if (empty($_POST["stad"])){
				$err_stad="*Street Address Required";
			 }
			else{
				$stad=htmlspecialchars($_POST["stad"]);
			 }
			if (empty($_POST["code"])){
				$err_code="*Region Code Required||";
			 }
			else{
				$code=htmlspecialchars($_POST["code"]);
			 }
			if(empty($_POST["city"]))
			 {
				$err_cityad="*City Name Required||";
			 }
			else
			{
				$cityad=htmlspecialchars($_POST["city"]);
			}
			 if(empty($_POST["state"]))
			{
				$err_statead="*State Name Required";
			}
			else
			{
				$statead=htmlspecialchars($_POST["state"]);
			}
			if(empty($_POST["pocode"]))
			 {
				$err_pocode="*Postal/Zip Code Required";
			 }
			 else
			 {
				$pocode=htmlspecialchars($_POST["pocode"]);
			 }
			 if (empty($_POST["dob"])){
				$err_dob="*Date of Birth Required";
			}
			else{
				$dob=htmlspecialchars($_POST["dob"]);
			}
			if (empty($_POST["day"])){
				$err_day="*Name Required";
			}
			else{
				$day=htmlspecialchars($_POST["day"]);
			}
			if (empty($_POST["day"])){
				$err_day="*Day Required";
			}
			else{
				$day=htmlspecialchars($_POST["day"]);
			}
			if (empty($_POST["mmonth"])){
				$err_month="*Month Required";
			}
			else{
				$mmonth=htmlspecialchars($_POST["day"]);
			}
			if (empty($_POST["year"])){
				$err_year="*Year Required";
			}
			else{
				$year=htmlspecialchars($_POST["year"]);
			}
			if(!isset($_POST["gender"])){
				$err_gender="*[Gender Required]";
			 }
			else{
				$gender=$_POST["gender"];
			 }
			 
			if(!isset($_POST["special"])){
				
				$err_special="*At least one option must be selected";
			 }
			else
			{
			 $special=$_POST["special"];
             $newspecial=implode(',',$special);
			}
			
			if(empty($_POST["comment"]))
			{
			 $err_comment="[comment Required]";
			}
			else
			{
			$comment=htmlspecialchars($_POST["comment"]);
			}
		
		}

        

        $query="INSERT INTO `db_directlyadd`(`Name`, `Username`, `Password`, `Phone`, `Street address`, `City`, `State`, `Postal code`, `Day`, `Month`, `Year`, `Gender`, `Why Special?`, `Comment`) VALUES ('$nname','$uname','$password','$number','$stad','$cityad','$statead','$pocode','$day','$mmonth','$year','$gender','$newspecial','$comment')";
		
            
        execute($query);
        
       
        
         
?>
