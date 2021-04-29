

<?php
session_start();
require("dbconnection.php");
$conn=connection();
$q = "SELECT username,cnumber,email, address FROM reg WHERE id='".$_SESSION["id"]."'";
$r = mysqli_query($conn,$q);
$a = mysqli_fetch_assoc($r);
echo "username: ".$a["username"]."<br>";
echo "cnumber: ".$a["cnumber"]."<br>";
echo "email: ".$a["email"]."<br>";
echo " address:".$a["address"];

?>
