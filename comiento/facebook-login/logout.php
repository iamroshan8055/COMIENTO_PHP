<?php
require_once "config.php";

if(isset($_GET['logout'])){
	unset($_SESSION['userData']);
	unset($_SESSION['access_token']);
	session_destroy();
	header('location: http://localhost/project/comiento/login-cust.php');
	exit;
}


?>