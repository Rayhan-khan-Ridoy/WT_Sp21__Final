<?php

require_once "connection1.php";

$query="select * from db_students";
$rslt=get($query);

?>

<table border="1" style="border-collapse:collapse;">
    <tr>
        <th>name</th><th>id</th><th>dob</th><th>credit</th>
   <th>cgpa</th><th>dept_id</th>
    </tr>

<?php
    foreach($rslt as $row){
        echo"<tr>";
        echo"<td>".$row["name"]."</td>";
        echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["dob"]."</td>";
        echo"<td>".$row["credit"]."</td>";
        echo"<td>".$row["cgpa"]."</td>";
        echo"<td>".$row["dept_id"]."</td>";
        echo"</tr>";
    }
    
    ?>




</table>