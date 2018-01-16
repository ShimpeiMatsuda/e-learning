<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container">
	<div class="table-responsive">
		<table class="table table-responsive">
			<tr><td>Students name</td><td>Course</td>
			<td>Delete</td><td>Edit</td></tr>
		<?php
		 	$sql="SELECT * FROM userstbl, user_coursestbl, coursestbl
		 	WHERE coursestbl.courseid=user_coursestbl.course_id AND 
		 	userstbl.userid=user_coursestbl.user_id";
		 	$result = $con->query($sql); 
		 	if($result->num_rows > 0){
		 		while($row = $result->fetch_assoc()){
				 ?>	
				<form action="" method="POST">
					<?php
					echo "<tr>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['coursename']."</td>";
					echo "<td><input type='submit' value='Delete' name ='delete'></td>";
					echo "<td><input type='submit' value='Edit' name ='delete'></td>";
					echo "</tr>";
					?>	
				</form>
				<?php
				}
			}else{
				echo "<tr><td colspan='5'>No record found</td></tr>";
			}	
		?>				
		</table>

<?php
require_once 'footer.php';
?>