<?php
$mysqli = new mysqli('localhost','root','','customer');
$id = $_GET['id'];

$result = mysqli_query($mysqli,"DELETE from customer_master WHERE id=$id");
header("location:home.php");




?>