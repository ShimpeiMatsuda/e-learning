<?php
require_once 'connect.php';
require_once 'header.php';
?>
<link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Joti+One|Sedgwick+Ave+Display" rel="stylesheet">
<div class="container">
	<h3 style="text-align:center;">All  Courses</h3>
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
<hr>
<?php
require_once 'footer.php';
?>