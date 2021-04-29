<?php

require_once "models/db_inbox.php";

$query="select * from db_inbox";
$rslt=get($query);

?>

<table  border="1" style="border-collapse:collapse;background-color:#34ebd2;">
    <tr>
        <th>date</th><th>from</th><th>messages</th>
    </tr>

<?php
    foreach($rslt as $row){
        echo"<tr>";
        echo"<td>".$row["date"]."</td>";
        echo"<td>".$row["from"]."</td>";
        echo"<td>".$row["message"]."</td>";
        
       
        echo"</tr>";
    }
    
    ?>




</table>