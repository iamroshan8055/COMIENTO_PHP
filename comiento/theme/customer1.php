<?php
session_start();
//database
$servername = "localhost";
$username = "root";
$password = "";
$db = "comiento";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} die();
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="admin_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin_theme/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">


  <?php 
$name_error="";
$phone_error="";
$email_error="";
$pwd_error="";
$cnfpwd_error="";
$name="";
$phone="";
$email="";
$pwd="";
$cnfpwd="";
$mainSuccessMessage="";
$mainErrorMessage="";
$mainLoginErrorMessage="";

$validationStatus=0;
    if(isset($_POST['email'])){
      //die("okokok");
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $cnfpwd = $_POST['confirm password'];
        
        
        

        if(empty($name)){
            $name_error="Name is required.";
            $validationStatus=1;
        }
        if(empty($phone)){
            $phone_error="Phone is required.";
            $validationStatus=1;
        }
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
        if(empty($cnfpwd)){
            $cnfpwd_error="confirm Password is required.";
            $validationStatus=1;
        }

        if($validationStatus==0){
          $sql = "INSERT INTO admin_master(name, phone, password)
          VALUES ('".$_POST["name"]."','".$phone = $_POST['phone']."','".$_POST["password"]."','".$_POST["email"]."')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

          echo "<script>window.location.href='index.html';</script>";
        }else{
         $mainLoginErrorMessage="Invalid Email or password.";
        }
          
       
       $conn->close();

       }
?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Register</div>
        <div class="card-body">

          <form method="POST">
          
          <div class="form-group">
              <div class="form-label-group">
                <input type="text"  class="form-control" name="name" placeholder="User Name" autofocus>
                <label for="inputName">User Name</label>
                <span style="color:red;"><?=$name_error?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="number"  class="form-control" name="phone" placeholder="Phone Number">
                <label for="inputPhone">Phone Number</label>
                <span style="color:red;"><?=$phone_error?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email"  class="form-control" name="email" placeholder="Email address">
                <label for="inputEmail">Email address</label>
                <span style="color:red;"><?=$email_error?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password"  class="form-control" name="password" placeholder="Password">
                <label for="inputPassword">Password</label>
                <span style="color:red;"><?=$pwd_error;?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password"  class="form-control" name="confirm password" placeholder="Confirm Password">
                <label for="inputConfirmPassword">Confirm Password</label>
                <span style="color:red;"><?=$cnfpwd_error;?><?php echo $mainLoginErrorMessage;?></span>
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
