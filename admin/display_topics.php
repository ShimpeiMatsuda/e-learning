<?php
require_once 'connect.php';
require_once 'header.php';
?>

	<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered">
	        	<tr><td>Course name</td><td>Topic title</td><td>Topic details</td><td>Date added</td><td>Delete</td><td>Edit</td></tr> 	 
			
	<?php 
	//this is connection with display page
	$id = isset($_GET['id'])?(int)$_GET['id']:0;
	$cquery = "";
	if($id > 0){
		$cquery = "AND coursestbl.courseid=$id";
	}

	if(isset($_POST['delete'])){
		$sq="DELETE FROM topicstbl WHERE topicid=".$_POST['topicid'];
		$con->query($sq);
		if($con->query($sq)==TRUE){
			echo "<p class='alert alert-success'>Success delete". $_POST['topicid'] . "</p>" ;
		}else{
			echo  "<p class='alert alert alert-danger'>Error</p>";
		}
	}
	$sql="SELECT * FROM topicstbl, coursestbl 
			WHERE coursestbl.courseid=topicstbl.courseid " . $cquery;
			echo $sql;


	$result=$con->query($sql);
	if($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()){
	?><form action="" method="POST">
		<input type="hidden" name="topicid" value="<?php echo $row['topicid'];?>">
	<?php
			echo "<tr>";
			echo "<td>".$row['coursename']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['details']."</td>";
 			echo "<td>".$row['date_added']."</td>";
			echo "</td>";
			echo "<td><input type='submit' value='Delete' name='delete'></td>";
			echo "<td>"."<a href='edit_topics.php?id=".$row['topicid']."'>"."Edit"."</td>";
			echo "</tr>";
			?>
			</form>
			<?php 				
		}
	}
?>	  

	
		</table>
		</div>	
	</div>	

<?php
require_once 'footer.php';
?>