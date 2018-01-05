<?php
require_once 'connect.php';
require_once 'header.php';
?>
<div class="container"> 
<?php
if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,md5($_POST['password']));
	$sql="SELECT * FROM userstbl WHERE username='$username' and password='$password'";
	$query=$con->query($sql);
	if($query->num_rows>0){
		$result =$query->fetch_assoc(); 
		$_SESSION['sessid']      = $result['userid'];
		$_SESSION['sessaccount'] = $result['account'];
		if($result['account']=='user'){
			header('Location:home_page.php');
		}else{
			header('Location:admin/home_admin.php');
		} 
	}else{
		echo  "<p class='alert alert-danger'>Invalid username or password</p>";
	}
}

?>
	<form method="POST" action="">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form action="" method="POST">
				   <div class="form-group">
					    <label for="exampleInputFile">User name</label>
					    <input type="text" name="username" id="exampleInputFile" class="form-control" placeholder="User name">
				   </div>
				  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" name="login" class="btn btn-default">Log_in</button>
				</form>
			</div>
		</div>
	</form>
</div>	


<?php
require_once 'footer.php';
?>