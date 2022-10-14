<!--<?php
# session_start();
# session_destroy();
# header("location: login-cust.php");
?>-->
<?php 
session_start();
unset($_SESSION["session_login"]);
session_destroy();
header("location: index.php");
?>