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


?>

<html>
<head>

<title>Login Customer</title>

  <!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
#logo{
  margin-left: 35%;
  margin-right: auto;
}
body {
  background-color: white;
  background-image: url("./images/ab1.jpg");
  background-repeat: no-repeat;
  background-size: 1350px 890px;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

  #com:hover {
    display: inline-block;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: none;
    z-index: auto;
    width: auto;
    height: auto;
    position: static;
    cursor: default;
    opacity: 1;
    /*margin: 0;
    padding: 10px;*/
    overflow: visible;
    border: none;
    /*-webkit-border-radius: 0;
    border-radius: 0;
    font: normal 48px/normal "Warnes", Helvetica, sans-serif;
    color: rgb(252,95,15);*/
    text-decoration: normal;
    text-align: center;
    -o-text-overflow: clip;
    text-overflow: clip;
    white-space: pre;
    background: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;
    -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -webkit-transform: none;
    transform: none;
    -webkit-transform-origin: 50% 50% 0;
    transform-origin: 50% 50% 0;
  }
  .blinking{
    animation:blinkingText 2s infinite;
    animation:blinkingText 0.
     infinite;
  }
  @keyframes blinkingText{
      0%{     color: black;    }
      45%{    color: transparent; }
      22%{     color: #716733;    }
      24%{    color: transparent; }
      26%{     color: #716733;    }
      28%{    color: transparent; }
      30%{     color: #807632;    }
      32%{    color: transparent; }
      34%{     color: #716733;    }
      36%{    color: transparent; }
      38%{     color: #807632;    }
      40%{    color: transparent; }
      42%{     color: #716733;    }
      44%{    color: transparent; }
      48%{     color: #807632;    }
      50%{     color: #716733;    }
      52%{    color: transparent; }
      54%{     color: #F0E29A;    }
      80%{    color:white;  }
      97%{   text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
      100%{   text-shadow: 0 0 10px rgb(255,254,214) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
  }

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

      .cool-blues {
      background: #2175b0;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #6dd5ed, #2175b0);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #6dd5ed, #2175b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      color: #fff;
      border: 1px solid #eee;
    }
      .cool-blues:hover {
      background: #6dd5ed;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #2175b0, #6dd5ed);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #2175b0, #6dd5ed); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      color: #fff;
      border: 1px solid #eee;
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

.concard{
-webkit-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
-moz-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
}

  .ts{
    text-shadow: 2px 3px 3px black;
  }
  .tse{
    text-shadow: 1px 1px 1px black;
  }
  .tsr{
    text-shadow: 2px 2px 2px black;
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

.or-seperator {
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
    width: 40px;
    height: 40px;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    text-shadow: 3px 3px 4px transparent;
    display: inline-block;
    border-radius: 50%;
        position: relative;
        top: -21px;
        z-index: 1;
    }

</style>
<body>


  <?php 
$email_error="";
$pwd_error="";
$email="";
$pwd="";
$mainSuccessMessage="";
$mainErrorMessage="";
$mainLoginErrorMessage="";

$validationStatus=0;
    if(isset($_POST['submit'])){
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



      <div class="header">
        <div class="container">
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <div class="agileits-logo">
                <h1><a id="com" class="blinking" href="index.php">Comiento</a></h1>
              </div>
            </div>

          </nav>
        </div>
      </div>


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card-signin my-5">
          <div class="card-body concard">
            <img src="images/logo-c.png" height="100px" width="100px" class="img-responsive" id="logo">
            <h2 class="text-white text-center ts">Log In</h2>
            <br>

            <form method="POST" action="login-demo.php" class="form-signin">

              <div class="form-label-group">
                <input type="email" id="email" name="email" value="<?php echo ($email)?$email:""; ?>" class="form-control" placeholder="Enter Email address" autofocus>
                <label for="email">Email address</label>
                <span style="color:red;" class="tse">&nbsp&nbsp&nbsp&nbsp&nbsp<?=$email_error?></span>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                <label for="password">Password</label>
                <span style="color:red;" class="tse">&nbsp&nbsp&nbsp&nbsp&nbsp<?=$pwd_error;?><?php echo $mainLoginErrorMessage;?></span>
              </div>


                <!--Show Password-->
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="ShowPassword" name="ShowPassword">
                  <label class="custom-control-label text-white tsr" for="ShowPassword">Show Password</label>
                </div>


              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label text-white tsr" for="customCheck1">Remember Password</label>
              </div>

              <button class="btn btn-outline-info cool-blues btn-block text-uppercase tsr" name="submit" type="submit">Log in</button>
              <br>

              <div class="or-seperator"><b>OR</b></div>
              <div align="center">
              <h5 ><a style="text-decoration:none;" id="crt" class="tse" href="reg-demo.php" >Creat New Account</a></h5>
              </div>
              
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Log in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Log in with Facebook</button> -->

            </form>
          </div>
        </div>
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