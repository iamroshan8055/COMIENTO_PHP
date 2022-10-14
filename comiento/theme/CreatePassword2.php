<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "admin_master";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pass = $cpass = "";


  if (isset($_POST["update"]))
  {

    $password=$_POST['pass'];
    $cpassword=$_POST['cpass']

if (email_exists($email,$conn)) {
  $result=mysqli_query($conn,"SELECT password FROM admin_master WHERE email='$email'");
  $retrive=mysqli_fetch_array($result);
  $password=$retrive['password'];
  if ($pass==$password) {
      
        $pwd=md5($pass);
        mysqli_query($conn,"UPDATE admin_master SET password='$pwd'");
        $msg="<div class='success'>Password Changed Successfully</div>";

  }else{
    $msg="<div class='error'>Password is Wrong</div>";
  }
}else{
  $msg="<div class='error'>Email Does Not Exists</div>";
}


 
if ($_POST['pass'] != $_POST['cpass']) {
    						$cpassErr = "Confirm password not match.";
    						$validationstatus=1;
  							}

if (empty($_POST["pass"])) {
    						$passErr = "password is required";
  							$validationstatus=1;
  							}else {
    						$password = ($_POST['pass']);
  							}

if (empty($_POST["cpass"])) {
    						$cpassErr = "confirm password is required";
  							$validationstatus=1;
  							}/* else {
    						$cpass = mysqli_real_escape_string($_POST["cpass"]);
  							}*/
?>
<html>
<head>
	<meta charset="UTF-8">

		<!-- Bootstrap core CSS-->
	    <link href="admin_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom fonts for this template-->
	    <link href="admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	    <!-- Custom styles for this template-->
	    <link href="admin_theme/css/sb-admin.css" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>Create Password</title>
	<style>
		.error 
    {
      color: red;
    }
    .success
    {
      color: green;
      font-weight: bold;
    }
		</style>
</head>
<body class="bg-dark">

	<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header text-center"><h4>Create Password</h4></div>
        <div class="card-body">

	<form class="form-group" method="post" enctype="multipart/form data" action="Createpassword2.php?email=<?php echo $_GET["email"];?>">	
				<div class="form-group">
              <div class="form-label-group">
                <input type="password"  class="form-control" name="pass" id="password" placeholder="Password">
                <label for="inputPassword">Password</label>
                <span style="color:red;"><?=$passErr;?></span>

                <!--Show Password-->
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="ShowPassword" name="ShowPassword">
                  <label class="custom-control-label" for="ShowPassword">Show Password</label>
                </div>

                
              </div>
            </div>
 			<div class="form-group">
              <div class="form-label-group">
                <input type="password"  class="form-control" name="password" id="password" placeholder="Password">
                <label for="inputPassword">Confirm password</label>
                <span style="color:red;"><?=$cpassErr;?></span>
		<tr>
			<td><input class="btn btn-primary" type="hidden" name="id"></td>
			<td><input class="btn btn-primary" type="submit" name="update" value="Creat"></td>
		</tr>		
	</table>		

	</form>
</div>
</div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!--Show Password-->
    <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="admin_theme/vendor/jquery/jquery.min.js"></script>
    <script src="admin_theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_theme/vendor/jquery-easing/jquery.easing.min.js"></script>


</body>
</html>