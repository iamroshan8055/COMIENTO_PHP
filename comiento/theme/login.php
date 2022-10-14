<?php


session_start();

//database
$servername = "localhost";
$username = "root";
$password = "";
$db = "admin_master";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="admin_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin_theme/css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>

  <body class="bg-dark">


  <?php 
$email_error="";
$pwd_error="";
$email="";
$pwd="";
$mainSuccessMessage="";
$mainErrorMessage="";

$validationStatus=0;
    if(isset($_POST['email'])){
      //die("okokok");
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        
        
        

       
        if(!empty($email)){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format"; 
            $validationStatus=1;
          }
        }else{
        $email_error="Email is required.";
        $validationStatus=1;
        }
        if(empty($pwd)){
            $pwd_error="Password is required.";
            $validationStatus=1;
        }
        
        }
        


        if($validationStatus==0){
           $sql ="SELECT * from admin_master where email='".$email."' and password='".$pwd."'";
           if ($conn->query($sql) === TRUE) {
            $mainSuccessMessage = "New record created successfully";
            $email="";
        } else {
            $mainErrorMessage = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

        }
?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

          <form method="POST" action="login.php">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <input type="submit" name="submit" value="submit">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin_theme/vendor/jquery/jquery.min.js"></script>
    <script src="admin_theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_theme/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
