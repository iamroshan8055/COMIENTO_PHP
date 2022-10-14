<?php
$mysqli = new mysqli('localhost','root','','admin_master');
$id = $_GET['id'];

$result = mysqli_query($mysqli,"DELETE from admin_master WHERE id=$id");

/*
$row = mysqli_fetch_array($result);
$image = $row["file"];
unlink("./upload/".$image);*/

header("location:home.php");




?>