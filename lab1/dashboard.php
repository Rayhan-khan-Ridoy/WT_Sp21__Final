<html>
<header>
    </header>
    <body>
       
        <?php
       /* if(!isset($_COOKIE["username"])){
            header("Location:login.php");
        } */
        
        session_start();
        if(!isset($_SESSION["username"])){
            header("Location:login.php");
        }
        
        
        ?>
    
   <!-- <h3> WELLCOME  <?php echo $_COOKIE["username"]; ?>  </h3>  -->
    <h3> WELLCOME  <?php echo $_SESSION["username"]; ?>  </h3> 
    </body>

</html>