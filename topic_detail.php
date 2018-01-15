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
<div class="container">
	<div class="row">

<?php
$id =isset($_GET['id'])?(int)$_GET['id']:0;
$sql="SELECT * FROM  topicstbl
       WHERE topicid=$id";
$result=$con->query($sql);
 
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
	?>
<div class="col-md-offset-2 col-md-8 text-center">	
	<div class="box">
		<h2><?php echo $row['title'];?></h2>
		<p><?php echo $row['details'];?></p>
	</div>
</div>	
	<?php		

	}
}
?>
</div>
</div>
