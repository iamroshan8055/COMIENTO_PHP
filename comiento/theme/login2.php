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


/*if($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_POST['login'])) {


      $email = mysqli_real_escape_string($mysqli,$_POST['email']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT * FROM admin_master WHERE email = '".$email."' and password = '".$password."'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      

    if (!empty($row)) {
         $_SESSION["login_data"] = $row;
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: home.php");
    } else {
        $message = "Email or password is not match.";
        echo "<script type='text/javascript'>alert('".$message."');</script>";
        //header("Location: home.php");
    }
    

      //if ((empty(email) == true) && (empty(password) == true)) {
        // echo "ben11010100";
    //  }
      
      if($sql == true) {
         echo "Welcome ";
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
*/
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS-->
    <link href="admin_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin_theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin_theme/css/sb-admin.css" rel="stylesheet">

    <style type="text/css">
      #lgot{
        color: #00B2FF;
      }
      #lgot:hover {
        color: #0027FF;
      }
      #lgot:active {
        color: red;
      }
      #crt{
        color: #00B2FF;
      }
      #crt:hover {
        color: #0027FF;
      }
      #crt:active {
        color: red;
      }
      .s{
        border-radius: 20px;
        width: 120px;
        height: 40px;
        top: 80%;
        left: 25%;
        transform: translate(0%,-30%);
      }
      .cool-blues:hover {
      background: #6dd5ed;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #2175b0, #6dd5ed);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #2175b0, #6dd5ed); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      color: #fff;
      width: 120px;
      height: 40px;
      border: 2px solid #eee;
  }
      /*  .s:hover 
      {
        animation: animate 8s linear infinite;
        text-decoration: none;

      }
      @keyframes animate
      {
        0%
        {
          background-position: 0%;
        }
        100%
        {
          background-position: 400%;
        }
      }

      .s:before 
      {
        text-decoration: none;
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
        background-size: 400px;
        border-radius: 40px;
        opacity: 0;
        transition: 0.5s;
      }
      .s:hover:before 
      {
        text-decoration: none;
        filter: blur(20px);
        opacity: 1;
        animation: animate 8s linear infinite;
      }  */
    </style>

  </head>

  <body class="bg-dark">


  <?php 
$email_error="";
$pwd_error="";
$email="";
$pwd="";
$mainSuccessMessage="";
$mainErrorMessage="";
$mainLoginErrorMessage="";

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

        if($validationStatus==0){
          $sql = "SELECT * from admin_master where email='".$email."' and password='".$pwd."'";
          $retval = $conn->query($sql);
          if($retval->num_rows == 1) {
           // while($row = $retval->fetch_assoc())
            while($row = $retval->fetch_assoc()) {
              $_SESSION["session_login"]=$row;
              header("location: index.php");
          }

          echo "<script>window.location.href='index.php';</script>";
        }else{
         $mainLoginErrorMessage="Invalid Email or password.";
        }
          
       
       $conn->close();

       }
        
        }
        

        
        
?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h4>Admin Login</h4></div>
        <div class="card-body">

          <form method="POST" action="login2.php">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email"  class="form-control" name="email" id="email" placeholder="Email address" autofocus="email">
                <label for="email">Email address</label>
                <span style="color:red;"><?=$email_error?></span>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password"  class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
                <span style="color:red;"><?=$pwd_error;?><?php echo $mainLoginErrorMessage;?></span>

                <!--Show Password-->
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="ShowPassword" name="ShowPassword">
                  <label class="custom-control-label" for="ShowPassword">Show Password</label>
                </div>

                
              </div>
            </div>
            <h6 align="right"><a style="text-decoration:none;" id="lgot" href="ForgotPassword2.php" >ForgotPassword?</a></h6>
            <!--<input type="submit" name="submit" value="submit">-->
            <button name="submit" class="btn btn-outline-info cool-blues s">Submit</button>
            <div align="center">
            <!--  <h7 ><a style="text-decoration:none;" id="crt" href="../reg.php" >CreatNewAccount</a></h7>  -->
            </div>
          </form>
        </div>
      </div>
    </div>

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
