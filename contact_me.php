<?php
require_once 'connect.php';
require_once 'header.php';

if(isset($_POST['send'])){
	$name=$_POST['name'].$_POST['lastname'];
	$email=$_POST['email'];
	$number=$_POST['phone'];
	$message=$_POST['message'];
	$date=$_POST['date'];
	if($name==""or $email=="" or $number=="" or $message=="" or$date==""){
 		echo "<p class='alert alert-danger'>You shuold write all forms</p>";
 	}else{
	$sql= "INSERT INTO contacttbl(name,email,number,message,date)
	VALUES('$name', '$email', '$number', '$message','$date')";
	$con->query($sql);
	echo "<p class='alert alert-success'>Make it</p>";
}
}
?>
<body>
<form action="" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			 	<label for="name">First Name:</label><br>
			 	<input type="text" class="form-control" name="name" id="name">
			 </div>
			<div class="col-md-6">
			 	<label for="lastname">Last Name:</label><br>
			 	<input type="text" class="form-control" name="lastname" id="lastname">
			 </div>		 
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<label for="email">Email:</label><br>
				<input type="email" class="form-control" name="email" id="email">
			</div>	
			<div class="col-md-6">
				<label for="phone">Phone Number:</label><br>
				<input type="text" class="form-control" name="phone" id="phone">
			</div>
		</div>	
		<br>
	<div class="row">
		<div class="col-md-12">	
			<label for="message">Your Message:</label><br>
			<textarea class="form-control" name="message" id="message" rows="5"></textarea><br>
		</div>	
		<div class="col-md-6">
			<label for="exampleInputEmail1">Date Added</label>
            	<input class="datepicker" data-date-format="yyyy-mm-dd" type="text" name="date">
        </div>    	
    </div>	
           <br>
		<button  class="btn btn-xm btn-primary" name="send">Send</button>
	</div>	
</form>	

</body>

<?php	
require_once 'footer.php';
?>