<?php
require_once 'connect.php';
require_once 'header.php';


$id = isset($_GET['id'])?(int)$_GET['id']:0;   

if(isset($_POST['enroll'])){
	$userid=$_SESSION['sessid'];
	$sql = "INSERT INTO user_coursestbl(user_id,course_id) VALUES($userid,$id)";
	$con->query($sql);
	echo "success";
}
?> 
<div class="container"> 
	<form action="" method="POST">
	<?php   
	$sql = "SELECT * FROM topicstbl, coursestbl
	        WHERE coursestbl.courseid=topicstbl.courseid 
	        AND coursestbl.courseid=$id";   
	$result= $con->query($sql); 
	if($result->num_rows>0){ 
		$result2 = $con->query($sql); 
		$row2    = $result2->fetch_assoc();
		echo '<h1 class="text-center">'.$row2['coursename']."Topics".'<button type="submit" name="enroll" class="btn btn-default pull-right">Enroll
			</button>'.'</h1>';
		echo '<div class="row">';
		while($row = $result->fetch_assoc()){
		?>	 
		    <div class="col-md-4 text-center">
		      	<div class="box">	
				<a href="topic_detail.php?
				id=<?php echo $row['topicid'];?>">	<?php echo $row['title']; ?></a> 
		 		<p><?php echo $row['date_added'];?></p>
		 		<img src="<?php echo $row['image'];?>" class="img-responsive"/>
	   			</div>
			</div>
		</form>
	 	<?php
 		}
 		echo '</div>';
	}          	
     ?>		 	
</div>	        	 	 
			


<?php
require_once 'footer.php';
?>