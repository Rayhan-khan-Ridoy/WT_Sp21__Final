   <?php 
    require_once'models/db_subadmin.php';

	$nname="";
	$err_nname="";
	$uname="";
	$err_uname="";
	$pass="";
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
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$hear="";
    $newhear="";
	$err_hear="";
	$bio="";
	$err_bio="";
	
	
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
			if(empty($_POST["pass"]))
			 {
				 $err_pass="*Password is Required";
			 }
			 elseif (strlen($_POST["pass"])<8) 
			 {
				$err_pass=["*Password should be more than 8 character"];
			 }
			 elseif(!strpos($_POST["pass"],"#"))
			 {
				 $err_pass="*Password must contain at least one special character";
			 }
			 elseif(!!strpos($_POST["pass"],"[0-9]"))
			 {
				 $err_pass="*Password must contain Numeric values";
			 }
			 elseif(!!ctype_upper($_POST["pass"]))
			 {
				 $err_pass="*Password must contain UpperCase values";
			 }
			 elseif(!!ctype_lower($_POST["pass"]))
			 {
				 $err_pass="*Password must contain LowerCase values";
			 }

			 elseif(strpos($_POST["pass"]," "))
			 {
				 $err_pass="*Password must not contain spaces";
			 }
			 else
			 {
				 $pass=$_POST["pass"];
			 
			 }
			if(empty($_POST["conpass"]))
			 {
				 $err_conpass="*Confarm Password Required";
			 }
			 elseif (strlen($_POST["conpass"])<8) 
			 {
				$err_conpass="*Password must be 8 charachters long";
			 }
			 elseif(!strpos($_POST["conpass"],"#"))
			 {
				 $err_conpass="*Password must contain special character";
			 }
			 elseif(!!strpos($_POST["pass"],"[0-9]"))
			 {
				 $err_conpass="*Password must contain Numeric values";
			 }
			 elseif(!!ctype_upper($_POST["conpass"]))
			 {
				 $err_conpass="*Password must contain UpperCase values";
			 }
			 elseif(!!ctype_lower($_POST["conpass"]))
			 {
				 $err_conpass="*Password must contain LowerCase values";
			 }

			 elseif(strpos($_POST["conpass"]," "))
			 {
				 $err_conpass="*Password must not contain spaces";
			 }
			 else
			 {
				 $conpass=htmlspecialchars($_POST["conpass"]);
			 
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
				$err_code="*Region Code Required";
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
			if (empty($_POST["month"])){
				$err_month="*Month Required";
			}
			else{
				$month=htmlspecialchars($_POST["day"]);
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
			 
			if(!isset($_POST["hear"])){
				
				$err_hear="*At least one option must be selected";
			 }
			else
			{
			 $hear=$_POST["hear"];
             $newhear=implode(',',$hear);
             
			}
			
			if(empty($_POST["bio"]))
			{
			 $err_bio="[Bio Required]";
			}
			else
			{
			$bio=htmlspecialchars($_POST["bio"]);
			}
		
		}

        $query="INSERT INTO `db_subadmin`(`Name`, `Username`, `E-mail`, `Code`, `Number`, `Street Address`, `City`, `State`, `Postal Code`, `Gender`, `Where did you hear?`, `Why wants to be sub-admin?`) VALUES ('$nname','$uname','$email','$code','$number','$stad','$cityad','$statead','$pocode','$gender','$newhear','$bio')";
        
        execute($query);

       
    ?>
