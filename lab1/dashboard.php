<html>
<header>
    </header>
    <body>
        
        <?php
        if(!isset($_COOKIE["uname"])){
            header("Location:login.php");
        }
        ?>
    
    <h3> WELLCOME  <?php echo $_COOKIE["uname"]; ?> </h3>
    </body>

</html>