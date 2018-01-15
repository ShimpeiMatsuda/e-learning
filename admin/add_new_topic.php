<?php
require_once 'connect.php';
require_once 'header.php';

if(isset($_POST['register'])){
	$title=$_POST['title'];
	$detail=$_POST['detail'];
	$date=$_POST['date'];
	$course=$_POST['course'];
	$sql="INSERT INTO topicstbl(title,details,date_added,courseid) 
				VALUES('$title','$detail','$date',$course)";
	if($con->query($sql)==TRUE){
		echo "<p class='alert alert-success'>Make it </p>";
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
	   	<h2>Add new topic</h2> 	
		  		<label for="exampleInputEmail1">Topic Title</label>
				<input type="text" name="title" class="form-control" placeholder="Topic Title"> <br>
				<labelfor for="exampleInputEmail1">Topic Detail</label>
            	<textarea class="form-control" name="detail" placeholder="Topic Detail" rows="5"></textarea><br>
            	<label for="exampleInputEmail1">Date Added</label>
            	<input class="datepicker" data-date-format="yyyy-mm-dd" type="text" name="date">
            	 <br>

            	 <label for="exampleInputEmail1">Course</label>
				<select name="course" class="form-control">
            <?php 
            $sqlcourse="SELECT * FROM coursestbl";
            $querycourse=$con->query($sqlcourse);
            while($row = $querycourse->fetch_assoc()){
            	 ?>	

				
					<option value="<?php echo $row['courseid']; ?>" ?>
						<?php echo $row['coursename'] ?></option>
			<?php  
		 }	
		    ?> 
					
				       </select><br>
			   <button type="submit" class="btn btn-primary" name="register">Add new topic</button>
		   </form> 
	</div>
	</div>  
</div>
<?php
require_once 'footer.php';
?>