<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container">
		<div class="table-responsive">
			<table class="table table-bordered">
	        	<td>Contact id</td><td>name</td><td>email</td><td>message</td><td>date</td></tr> 

<?php
$sql="SELECT * FROM contacttbl";
$result = $con->query($sql);
if($result->num_rows > 0 ){
	while($row=$result->fetch_assoc()){
    echo "<tr>";
   	echo "<td>".$row['contactid']."</td>";			
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['message']."</td>";
	echo "<td>".$row['date']."</td>";
	}
}
?>	        	
	        </table>
	     </div>
</div>	        	


<?php
require_once 'footer.php';
?>