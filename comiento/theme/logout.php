<?php 
session_start();
unset($_SESSION["session_login"]);
echo "<script>window.location.href='http://localhost/project/comiento/index.php';</script>";
?>