<?php
require_once 'connect.php';
require_once 'header.php';
if(isset($_POST['register'])){
	$name=$_POST['couname'];
	$description=$_POST['description'];
	$sql="INSERT INTO coursestbl(coursename,description)VALUES('$name','$description')";
	if($con->query($sql)==TRUE){
		echo "<p class='alert alert-success'>Make it </p>";
	}else{
		echo "<p class='alert alert-danger'>Error</p>";
	}
}
?> 
<div class="container">
<div class="row">	
	<div class="col-md-offset-4 col-md-4" >
	   <form method="POST" action="">
	   	<h2>Add nnew course</h2> 	
		  		<label for="exampleInputEmail1">Course Name</label>
				<input type="text" name="couname" class="form-control" placeholder="course name"> <br>

		  	<label>Course description</label>
            	<textarea class="form-control" name="description" placeholder="Description" rows="5"></textarea>
             	       <br>
			   <button type="submit" class="btn btn-primary" name="register">Add new course</button>
		   </form> 
	</div>
	<a href="display_course.php">Display courses</a>
</div>  
</div>
<?php
require_once 'footer.php';
?>