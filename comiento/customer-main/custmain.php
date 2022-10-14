<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	session_start();
if ($_SESSION['login']==true || ($_POST['user']=="admin" && $_POST['pass']=="1234")) {
    //If they already have a session, give them access.
    //If not, check for posted UN & PW and if correct, give access.
    $_SESSION['login']=true; //Set login to true in case they got in via UN & PW
    //Do stuff for when logged in
}
else { //Not already logged in, not sent a password

    //Give the user a login form redirecting to this page.

}

	?>

</body>
</html>