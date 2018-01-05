<?php
require_once 'connect.php';
require_once 'header.php';

if(! isset($_SESSION['sessid'])){
	header('Location:log_in.php');
	exit;
}else{
	header('Location:home_page.php');
}	
require_once 'footer.php';
