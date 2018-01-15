<?php
require_once 'connect.php';
require_once 'header.php';
?>
<style type="text/css">
	.box {display: block;
		background: #f0f0f0;
		margin-top: 15px;
		padding: 10px;
	}

	.box img{
		height: 50px;
		width: 50px;
	}
</style>
<div class="container"> 
	<?php   
	$id = isset($_GET['id'])?(int)$_GET['id']:0;   
	$sql = "SELECT * FROM topicstbl, coursestbl
	        WHERE coursestbl.courseid=topicstbl.courseid 
	        AND coursestbl.courseid=$id";  
	$result= $con->query($sql);
	if($result->num_rows>0){
		
		$result2 = $result->fetch_assoc();
		echo '<h1 class="text-center">'.$result2['coursename'].'</h1>';
		echo '<div class="row">';
		while($row = $result->fetch_assoc()){
		?>	 
		    <div class="col-md-4 text-center">
		      	<div class="box">	
				<a href="topic_detail.php?id=<?php echo $row['topicid'];?>">	<?php echo $row['title']; ?></a> 
		 		<p><?php echo $row['date_added'];?></p>
		 		<img src="<?php echo $row['image'];?>"/>
	   				</div>
			</div>
	 	<?php
 		}
 		echo '</div>';
	}          	
     ?>		 	
</div>	        	 	 
			


<?php
require_once 'footer.php';
?>