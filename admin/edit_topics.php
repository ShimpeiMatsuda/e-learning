<?php
require_once 'connect.php';
require_once 'header.php';

$id = isset($_GET['id'])?(int)$_GET['id']:0;
$sql="SELECT * FROM topicstbl, coursestbl
 WHERE coursestbl.courseid=topicstbl.courseid AND topicid=$id ";
$exe=$con->query($sql);
$result=$exe->fetch_assoc(); 

if(isset($_POST['update'])){
	$title=$_POST['title'];
	$course=$_POST['course'];
	$details=$_POST['detail'];
	$date=$_POST['date'];
	$sql= "UPDATE topicstbl SET title='$title',details='$details',
		date_added='$date', courseid=$course WHERE topicid=$id";
		echo $sql;
	if($con->query($sql)===TRUE){
		echo "<p class='alert alert-success'>Success Edit</p>";
		header('Location:display_topics.php');
	}else{
		echo "<p class='alert alert-danger'>Error</p>";
	}
}
?>


<div class="container">
<div class="row">	
	<div class="col-md-offset-4 col-md-4" >
	   <form method="POST" action="">
	   	<h2>Edit the topics</h2>
		   	<label for="exampleInputEmail1">Topic ID</label>
			<input type="text" name="id" class="form-control" placeholder="Topic id" value="<?php echo $id;?>"> <br>
			<label for="exampleInputEmail1">Course name</label>
		  	    <select name="course" class="form-control">
				<?php 
				$sqlcourse = "SELECT * FROM coursestbl";
				$coursequery = $con->query($sqlcourse);
				while($row = $coursequery->fetch_assoc()){
				?>

				<option value="<?php echo $row['courseid']; ?>" <?php echo ($row['courseid']==$result['courseid']) ? 'selected="selected"' : ''; ?>><?php echo $row['coursename']; ?></option>
				<?php
				} 
				?>
				 </select><br>

		  		<label for="exampleInputEmail1">Topic Title</label>
				<input type="text" value="<?php echo $result['title'];?>" name="title" class="form-control" placeholder="Topic Title"> <br>
				<labelfor for="exampleInputEmail1">Topic Detail</label>
            	<textarea class="form-control" name="detail"  placeholder="Topic Detail" rows="5"><?php echo $result['details'];?></textarea><br>
            	<label for="exampleInputEmail1">Date Update</label>
            	<input class="datepicker" value="<?php echo $result['date_added']; ?>" data-date-format="yyyy-mm-dd" type="text" name="date">
            	 <br>
			   <button type="submit" class="btn btn-primary" name="update">Update</button>
		   </form> 
	</div>
	</div>  
</div>

<?php
require_once 'footer.php';
?>