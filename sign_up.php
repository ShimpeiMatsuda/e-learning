<?php
require_once 'connect.php';
require_once 'header.php';
require_once 'footer.php';

 if(isset($_POST['signup'])){
 	$username=$_POST['username'];
 	$password=md5($_POST['password']);
 	$email=$_POST['email'];
 	if($username=="" or $password=="" or $email==""){
 		echo "<p class='alert alert-danger'>You shuold write all forms</p>";
 	}else{
 		$sql="INSERT INTO userstbl(username, email,password,account) VALUES('$username','$email','$password','user')";
 		$con->query($sql);
 		echo "<p class='alert alert-success'>Make it</p>";
 	}

 }	

?>

<div class="container">
     <div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="" method="POST">
			   <div class="form-group">
				    <label for="exampleInputFile">User name</label>
				    <input type="text" name="username" id="exampleInputFile" class="form-control" placeholder="User name">
			   </div>
			  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			 </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			  <button type="submit" name="signup" class="btn btn-default">Sign_up</button>
			</form>
		</div>
	</div>
</div>			
