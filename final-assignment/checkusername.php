<?php require_once'controllers/LoginController.php';  

$username =$_GET["uname"];

$rslt= checkUsernameValidity($username); 
echo $rslt;


?>

