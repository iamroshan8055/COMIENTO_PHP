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

    <title>Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="admin_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin_theme/css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  </head>

  <body class="bg-dark">


  <?php 
$email_error="";
$email="";
$mainSuccessMessage="";
$mainErrorMessage="";
$mainLoginErrorMessage="";

$validationStatus=0;
    if(isset($_POST['email'])){
      //die("okokok");
        $email = $_POST['email'];
        
        
        

       
        if(!empty($email)){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format"; 
            $validationStatus=1;
          }
        }else{
        $email_error="Email is required.";
        $validationStatus=1;
        }

        if($validationStatus==0){
          $sql = "SELECT * from admin_master where email='".$email."'";
          $retval = $conn->query($sql);
          if($retval->num_rows == 1) {

           // while($row = $retval->fetch_assoc())
            while($row = $retval->fetch_assoc()) {
              $_SESSION["session_login"]=$row;
              header("location: #");
            }

            echo "<script>window.location.href='#';</script>";
          }else{
           $mainLoginErrorMessage="Invalid Email.";
           }
          
       
       $conn->close();

       }
        
    }
        

        
        
?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h4>Forgot Password</h4></div>
        <div class="card-body">

          <form method="POST" action="ForgotPassword2.php">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email"  class="form-control" name="email" id="email" placeholder="Email address" autofocus="autofocus">
                <label for="email">Email address</label>
                <span style="color:red;"><?=$email_error?></span>
                <span style="color:red;"><?=$mainLoginErrorMessage?></span>
              </div>
            </div>
            
            <input type="submit" name="submit" value="Create Password">
            
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
