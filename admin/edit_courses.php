<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container">
	<?php
	$id = isset($_GET['id'])?(int)$_GET['id']:0;
	$sql = "SELECT * FROM coursestbl WHERE courseid= $id";
	$exe =$con->query($sql);
	$result = $exe->fetch_assoc(); 
	
	if(isset($_POST['update'])){
		$name = $_POST['name'];
		$description = $_POST['description'];
		$sq="UPDATE coursestbl SET coursename='$name' , description='$description' WHERE courseid=$id";
		if($con->query($sq)===TRUE){
			header("Location:display_course.php");
		}else{
			echo"<p class='alert alert-danger'>Error</p>";
		}	
	}
	?>
	
	 <div class="row">
	 	<div class="col-md-offset-4 col-md-4">
	 		<form method="POST" action="">
	 			<h2>Edit the course</h2>
	 			<label for="exampleInputEmail1">Course ID</label>
				<input type="text" name="id" class="form-control" placeholder="Course id" value="<?php echo $id;?>"> <br>
				<label for="exampleInputEmail1">Course name</label>
		  	    <input type="text" name="name" class="form-control" placeholder="Course name" value="<?php echo $result['coursename'];?>"><br>
		  	    <label for="exampleInputEmail1">Course description</label>
				<textarea class="form-control" name="description"  placeholder="Course Description" rows="5"><?php echo $result['description'];?></textarea><br>
				<button type="submit" class="btn btn-primary" name="update">Update</button>
		   </form> 
	</div>
	</div>  
</div>



</div>	

<?php
require_once 'footer.php';
?>