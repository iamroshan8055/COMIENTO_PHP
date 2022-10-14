<?php
$mysqli = new mysqli('localhost','root','','admin_master');
$id = $_GET['id'];

$result = mysqli_query($mysqli,"DELETE from restaurant_master WHERE id=$id");

header("location:home.php");




?>