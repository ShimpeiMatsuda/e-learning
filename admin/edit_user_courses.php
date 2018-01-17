<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container">
	<?php
	$id = isset($_GET['id'])?(int)$_GET['id']:0;
	$sql = "SELECT * FROM userstbl, user_coursestbl, coursestbl
		 	WHERE coursestbl.courseid=user_coursestbl.course_id AND 
		 	userstbl.userid=user_coursestbl.user_id AND user_courses_id=$id";
	$exe =$con->query($sql);
	$result = $exe->fetch_assoc(); 
	
	if(isset($_POST['update'])){
		$username = $_POST['username'];
		$courseid = $_POST['courseid'];
		$sq="UPDATE  user_coursestbl SET course_id='$courseid' WHERE user_courses_id=$id";
		if($con->query($sq)===TRUE){
			header("Location:user_courses.php");
		}else{
			echo"<p class='alert alert-danger'>Error</p>";
		}	
	}
	?>
<div class="row">
	 	<div class="col-md-offset-4 col-md-4">
	 		<form method="POST" action="">
	 			<h2>Edit the course</h2>
	 			<label for="exampleInputEmail1">User Name</label>
				<input type="text" name="username" class="form-control" disabled="" placeholder="User name" value="<?php echo $result['username'];?>"> <br>
			<div class="form-group">
		  	 	<label for="exampleInputEmail1">Courses</label>
		  	 	<select name="courseid" class="form-control">
		  	 	<?php
		  	 	$sql="SELECT * FROM coursestbl";
		  	 	$row=$con->query($sql);
		  	 	if($row->num_rows>0){
		  	 		while ($result=$row->fetch_assoc()) {
		  	 	?>		
		  	 			<option value="<?php echo $result['courseid']; ?>"<?php echo ($result['courseid']==1)? 'selected=""':'';?>><?php echo $result['coursename']; ?></option>
		  	 	<?php		
		  	 		}
		  	 	}

		  	 	?>
				       </select><br>
		   </div>	       
		  	    <button type="submit" class="btn btn-primary" name="update">Update</button>

		  	 </form>
		 </div>
</div>		  	    

<?php
require_once 'footer.php';
?>
