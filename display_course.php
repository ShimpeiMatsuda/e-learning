<?php
require_once 'connect.php';
require_once 'header.php';
?>
<style type="text/css">
	.box{ 
		background: #f0f0f0;
	}
	.box a{
		margin-top: 15px;
		display: block;
		text-decoration: none;
		padding: 20px;
		font-size: 20px;
		font-weight: 600;
		color: #333;
		height: 250px;
		word-wrap: all;
	}
	.box a:hover{
		background: #ddd;
	}
	.box  img{
		margin-top: 10px;
	}
	.box p{
		font-size: 12px;
		margin-top: 10px; 
	}
</style>
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Joti+One|Sedgwick+Ave+Display" rel="stylesheet">
<div class="container">
	<h3 style="font-family: 'Joti One', cursive;">All  Courses</h3>
	<button type="submit" name="enroll" class="btn btn-default">Enroll
	</button>
	<p style="font-family: 'Joti One', cursive;
font-family: 'Sedgwick Ave Display', cursive;">
    
    </p>
	<hr>
   <div class="row">     
 <?php
	$sql= "SELECT * FROM coursestbl";
	$result=$con->query($sql);
	if($result ->num_rows > 0)
	{
		while($row = $result->fetch_assoc()){
	 	?>
	 	<div class="col-md-3 text-center">
	 		<div class="box">
	 		<a href="display_topics.php?id=<?php echo $row ['courseid'];?>" ><?php echo $row['coursename']; ?><br>
	 			<img src="images/icon.gif"><br>
	 		<p>	<?php echo $row['description']; ?>
	 		</p>

	 		</a>
	 		</div>
	 	</div>		
	 	<?php	

 		}
 	}
 ?>       
    </div>  
</div>  

<?php
require_once 'footer.php';
?>