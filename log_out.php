<?php
require_once 'connect.php';
require_once 'header.php';
session_destroy();
header('Location:log_in.php');
?>