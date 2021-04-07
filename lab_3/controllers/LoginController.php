<?php 
require_once'models/db_config.php';


$name="";
$err_name="";
$hasError=false;
if(isset($_POST["name"])){
    $hasError=true;
    $err_name="<br>name required";
    
}
else{
    $name=$_POST["name"];

}

    
    if(!hasError){
     
        insertUser($name,$_POST["username"],$_POST["password"],$_POST["email"]);
    }

if(isset($_POST["btn_Login"])){
    if(authenticateUser($_POST["username"],$_POST["password"])){
        header("Location:dashboard.php");
        
    }
    echo "invalidusername or password";
    
}

function insertUser($name,$username,$password,$email){
    $query="INSERT INTO users VALUES(NULL,'$name','$username','$password','$email')";
    execute($query);
}


function authenticateUser($username,$password){
    $query="select * from users where usenaqme='$username' and password='$password'";
    $result=get($query);
    if (count($result)>0){
        return $result[0];
    }
    return false;
}




?>