<?php
require_once 'connect.php';
require_once 'header.php';

if(isset($_POST['delete'])){
	$sql = "DELETE  FROM user_coursestbl WHERE user_courses_id=".$_POST['user_courses_id'];
	$result2= $con->query($sql);
	if($result2==TRUE){
		echo "<p class='alert alert-success'>Success delete"."</p>" ;
	}else{
		echo  "<p class='alert alert alert-danger'>Error</p>";
	}
}
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
					<input type="hidden" name="user_courses_id" value="<?php echo $row ['user_courses_id']; ?>">
					<?php
					echo "<tr>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['coursename']."</td>";
					echo "<td><input type='submit' value='Delete' name ='delete'></td>";
					echo "<td>"."<a href='edit_user_courses.php?id=".$row['user_courses_id']."'>"."Edit"."</a>"."</td>";
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
	</div>
</div>


<?php
require_once 'footer.php';
?>