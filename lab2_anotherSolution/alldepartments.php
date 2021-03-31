<?php

require_once "connection2.php";

$query="select * from db_departments";
$rslt=get($query);

?>

<table border="1" style="border-collapse:collapse;">
    <tr>
        <th>departments</th><th>dept_id</th>
    </tr>

<?php
    foreach($rslt as $row){
        echo"<tr>";
        echo"<td>".$row["departments"]."</td>";
        echo"<td>".$row["dept_id"]."</td>";
       
        echo"</tr>";
    }
    
    ?>




</table>