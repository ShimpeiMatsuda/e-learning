<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container">
    <div class="table-responsive">
      <table class="table table-bordered">
            <tr><td>course id</td></tr><tr><td>course name</td></tr><tr><td>description</td></tr>
 <?php
 		$sql= "SELECT * FROM coursestbl";
 		$result=$con->query($sql);
 		if($result->num_rows > 0){
 			while($row = $result->fetch_assoc()){
 				echo "<tr>";
 				echo "<td>".$row['courseid']."</td>";
 				echo "<td>".$row['coursenaem']."</td>";
 				echo "<td>".$row['description']."</td>";
 				echo "</td>";
 				echo "<td><input type='submit' value='Delete' name='delete'</td>";
 				echo "</tr>";
 			}
 		}
 ?>       
      </table>
    </div>  
</div>  

<?php
require_once 'footer.php';
?>