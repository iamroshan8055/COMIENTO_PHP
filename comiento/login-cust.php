<?php
  require_once "./facebook-login/config.php";

  /*if (isset($_SESSION['access_token'])) {
    header('Location: ./facebook-login/index.php');
    exit();
  }*/

  $redirectURL = "http://localhost/project/comiento/facebook-login/fb-callback.php";
  $permissions = ['email'];
  $loginURL = $helper->getLoginUrl($redirectURL, $permissions);

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

if (isset($_SESSION['session_login'])) {
    header('Location: plans.php');
    exit();
  }


/*if($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['login'])) {


      $email = mysqli_real_escape_string($mysqli,$_POST['email']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT * FROM customer_login WHERE email = '".$email."' and password = '".$password."'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      

    if (!empty($row)) {
         $_SESSION["login_data"] = $row;
        $message = "ok";
        echo "<script type='text/javascript'>alert('".$message."');</script>";
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
         header("location: demo.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<script type='text/javascript'>alert('".$error."');</script>";
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

    <title>Login page</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
      border: 3px solid #eee;
  }
  .devider {
    border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
.btn-brand {
    margin-bottom: 4px;
}
.btn-google-plus {
    color: #fff;
    background-color: #d34836;
    border-color: #d34836;
}
.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998;
}
.btn-brand {
    border: 0;
}
.btn.btn-brand {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btn-brand i {
    display: inline-block;
    width: 2.0625rem;
    margin: -.375rem -.75rem;
    line-height: 2.0625rem;
    text-align: center;
    background-color: rgba(0,0,0,.2);
}
.fab {
    display: inline-block;
    font: normal normal normal 14px/1 ;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.buttons{
  padding-top: 10px;
}
.w{
  background-color: white;
  padding-top: 6px;
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
          $sql = "SELECT * from customer_master where email='".$email."' && password='".$pwd."'";
          $retval = $conn->query($sql);
          if($retval->num_rows == 1) {
           // while($row = $retval->fetch_assoc())
            while($row = $retval->fetch_assoc()) {
              $_SESSION["session_login"]=$row;
          }

          echo "<script>window.location.href='plans.php';</script>";
        }else{
         $mainLoginErrorMessage="Invalid Email or Password.";
        }
          
       
       $conn->close();

       }
        
        }
        

        
        
?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h4>Login</h4></div>
        <div class="card-body">

          <form method="POST" action="login-cust.php">
          
            <div class="form-group">
              <div class="form-label-group">
                <input type="email"  class="form-control" name="email" id="email" placeholder="Email address">
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
            <h6 align="right"><a style="text-decoration:none;" id="lgot" href="ForgotPassword.php" >Forgot Password ?</a></h6>
            <!--<input type="submit" name="submit" value="submit">-->
            <button name="submit" class="btn btn-outline-info cool-blues s">Submit</button>
            <div align="center">
            <h7 ><a style="text-decoration:none;" id="crt" href="reg.php" >Creat New Account</a></h7>
            </div>


            <!-- <div class="d"></div>
            <div class="devider">
              <p class="text-center w"><small class="text-muted">Login With</small></p>
            </div>
            <hr align="center" width="100%">
            <div class="buttons">
            <div class="text-center">
            <a><button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-brand btn-facebook"><i class="fab fa-facebook-f"></i><span>&nbsp&nbsp&nbsp&nbsp Facebook</span></button></a>
            <a><button type="button" class="btn btn-brand btn-google-plus"><i class="fab fa-google-plus-g"></i><span>&nbsp&nbsp&nbsp&nbsp Google plus</span></button></a>
            </div>
            </div> -->


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
