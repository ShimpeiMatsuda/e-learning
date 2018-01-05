<!DOCTYPE html>
<html>
<head>
	<title>E-learning website for admin</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
  <style type="text/css">
    textarea.form-control{
      padding: 0;
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home_admin.php">Shimpei for admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
        <li><a href="display_course.php">Display courses</a></li> 
        <li><a href="add_new.php">Add new course</a></li> 
        <li><a href="dislay_allclasses.php">All users' courses</a></li> 
        <li><a href="display_topics.php">Topics of courses</a></li> 
      
      </ul> 
      <ul class="nav navbar-right navbar-nav">
      	<li><a href="log_out.php">Log-out</a></li>
      	<li><a href="sign_up.php">Sign-up</a></li>
      </ul>	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
