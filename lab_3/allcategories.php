<?php include 'admin_header.php';
require_once'controllers/CategoryController.php';
$categories = getAllCategories();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
            foreach($caregories as $category){
            
            echo "<tr>";
            echo"<td>".$category["name"]."</td>";
            echo"<td>".$category["id"]."</td>";
            echo"<td>"<a href="editcategory.php" class="btn btn-success">edit</a></td>";
            echo"<td>"<a class="btn btn-danger">delete</a></td>";
            echo "</tr>";
            
            }
			<td>1</td>
			<td>Groserry</td>
			<td>100</td>
			<td><a href="editcategory.php" class="btn btn-success">Edit</a></td>
            <td><a class="btn btn-danger"> Delete </a> </td>
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>