<?php
require_once 'connect.php';
require_once 'header.php';

 		if(isset($_POST['delete'])){
 			$sq="DELETE FROM  coursestbl WHERE courseid=".$_POST['courseid'];
 			$con->query($sq);
 			if($con->query($sq)==TRUE){
 				echo "<p class='alert alert-success'>Success delete". $_POST['courseid'] . "</p>" ;
 			}else{
 				echo  "<p class='alert alert alert-danger'>Error</p>";
 			}
 		}
      
?>
<div class="container">
    <div class="table-responsive">
      <table class="table table-bordered">
            <tr><td>Course name</td><td>Description</td><td>Delete</td><td>Edit</td></tr>
 <?php

 		$sql= "SELECT * FROM coursestbl";
 		$result=$con->query($sql);
 		if($result->num_rows > 0){	
 			while($row = $result->fetch_assoc()){
 ?>     <form action="" method="POST">
 		<input type="hidden" name="courseid" value="<?php echo $row['courseid'];?>">
 <?php		    
 				echo "<tr>";
 				echo "<td>"."<a href='display_topics.php?id=".$row['courseid']."'>".$row['coursename']."</a>"."</td>";
 				echo "<td>".$row['description']."</td>";
 				echo "</td>";
 				echo "<td><input type='submit' value='Delete' name='delete'></td>";
 				echo "<td>"."<a href='edit_courses.php?id=".$row['courseid']."'>"."Edit"."</a>"."</td>";
 				echo "</tr>";
 				?>
 			</form>
 			<?php
 			}
 		}
 ?>
 
      </table> 
     
    </div>  
</div>  

<?php
require_once 'footer.php';
?>