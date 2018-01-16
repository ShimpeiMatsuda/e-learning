<?php
require_once 'connect.php';
require_once 'header.php';
?>
<style type="text/css">
	.box {
		margin-top: 15px;
		background: #f0f0f0;
		display: block;


	}
	.box h2{
		padding-top:15px;
		font-weight: 600;
			}
	.box p{
		font-size: 20px;
	    padding: 15px;
	}		
</style>
<?php

$id =isset($_GET['id'])?(int)$_GET['id']:0;
$sql ="SELECT * FROM  topicstbl
       WHERE topicid=$id";        
$result = $con->query($sql);
$row1   = $result->fetch_assoc(); //1

$sql2 = "SELECT * FROM topicstbl, coursestbl
	        WHERE coursestbl.courseid=topicstbl.courseid 
	        AND coursestbl.courseid=". $row1['courseid']; 

$result2=$con->query($sql2);

?>
<div class="container">
	<div class="row">
		<div class="list-group col-md-2"> 
	<?php 
		while($row2 = $result2->fetch_assoc())	{	  
		?>	  
		<a href="topic_detail.php?id=<?php echo $row2['topicid']; ?> " class="list-group-item"><?php echo $row2['title']; ?></a> 
		<?php
		}
		 echo "</div>";
if($result->num_rows>0){  
	?>
		<div class="col-md-offset-1 col-md-8 text-center">	
			<div class="box">
				<h2><?php echo $row1['title'];?></h2>
				<p><?php echo $row1['details'];?></p>
				<p><?php echo $row1['date_added'];?></p>
			</div>
		</div>	
	<?php 
}
?>
		
	</div>
</div>
