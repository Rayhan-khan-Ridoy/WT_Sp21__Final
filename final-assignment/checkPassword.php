<?php require_once'controllers/LoginController.php';  

$password =$_GET["pass"];
$rlt= checkPasswordValidity($password);
echo $rlt;
echo $password;


?>


