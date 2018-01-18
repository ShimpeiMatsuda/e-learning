<?php
require_once 'connect.php';
require_once 'header.php';


$id = isset($_GET['id'])?(int)$_GET['id']:0;   
$userid=$_SESSION['sessid'];

if(isset($_POST['enroll'])){
	$sql = "INSERT INTO user_coursestbl(user_id,course_id) VALUES($userid,$id)";
	$con->query($sql);
	echo "<p class='alert alert-success'>Successfully  Enrolled</p>";
}
if(isset($_POST['unenroll'])){
	$sql = "DELETE FROM user_coursestbl 
	         WHERE user_id = $userid AND course_id=$id"; 
	$con->query($sql);
	echo '<p class="alert alert-success">Oppss...you just unenrolled.. :(</p>';         
}
?> 
<div class="container"> 
	<form action="" method="POST">
	<?php   
	$sql = "SELECT * FROM topicstbl, coursestbl
	        WHERE coursestbl.courseid=topicstbl.courseid 
	        AND coursestbl.courseid=$id";
	//ordinary information           
	$result= $con->query($sql); 

	$sql2 = "SELECT * FROM user_coursestbl WHERE user_id=".$_SESSION['sessid'] ." and course_id=$id"; 
	$result3 = $con->query($sql2);

	if($result->num_rows>0){ 
		$result2 = $con->query($sql); 
		$row2    = $result2->fetch_assoc();

		echo '<h1 class="text-center">'.$row2['coursename'].' </h1><hr>';

		if( $result3->num_rows > 0){
			echo "<input type='submit' class='btn btn-danger' name='unenroll' value='Unenroll'>";
		}else{
			echo "<input type='submit' class='btn btn-success' name='enroll' value='Enroll'>";
		}

		echo '<div class="row">';
		$ctr = 1;
		while($row = $result->fetch_assoc()){
	?>	 
		    <div class="col-md-4">
		      	<div class="text-center">	
					<a href="topic_detail.php?
					id=<?php echo $row['topicid'];?>">
			      		<div class="item-img">
				 			<img src="<?php echo $row['image'];?>" class="img-responsive">
				 		</div>	
				 		<b><?php echo $row['title']; ?></b>
				 	</a> 
		 		<p><?php echo  date('M, d, Y', strtotime($row['date_added']));?></p>
	   			</div>
			</div> 
	 	<?php
	 		if($ctr%3==0){
	 			echo "</div><hr><div class='row'>";
	 		}
	 		$ctr++;
 		}
 		echo '</div>';
	}          	
     ?>
     </form>		 	
</div>	        	 	 
			


<?php
require_once 'footer.php';
?>