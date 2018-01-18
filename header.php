<!DOCTYPE html>
<html>
<head>
	<title>E-learning website</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="display_course.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">

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
  .item-img{ 
    width: 150px; 
    margin: auto;
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
      <a class="navbar-brand" href="home_page.php">Shimpei</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
      <li><a href="contact_me.php">Contact Me</a></li>

      <?php
      if(isset($_SESSION['sessid'])){ 
        echo '<li><a href="display_course.php">Courses</a></li>' ;
      }
      ?></ul>
      <ul class="nav navbar-right navbar-nav">
        <?php 
        if( ! isset($_SESSION['sessid'])){
          echo '<li><a href="log_in.php">Log-in</a></li>';
        }
        else{ 
          echo '<li><a href="log_out.php">Log-out</a></li>';
        }
        
      	if(! isset($_SESSION['sessid'])){
          echo '<li><a href="sign_up.php">Sign-up</a></li>';
        }else{
      	 }
        ?>
      </ul>	
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
