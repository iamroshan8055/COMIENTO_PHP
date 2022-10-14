<?php
session_start();

$mysqli = new mysqli('localhost','root','','admin_master');

$nameErr = $emailErr = $phoneErr = $genderErr = $addressErr = $imageErr = $passwordErr = $cpasswordErr = $error = "";
$name = $email = $phone = $gender = $address = $image = $password = $cpassword = "";

$validationstatus=0;


if(isset($_POST['add'])) {
  

    

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//die();
if ($_POST['password'] != $_POST['cpassword']) {
                $cpasswordErr = "Confirm password not match.";
                $validationstatus=1;
                }
    
$name = trim($_POST["name"]);
if (empty(trim($_POST["name"]))) {
                $nameErr = "Name is required";
                $validationstatus=1;
                }/* else {
                $name = mysqli_real_escape_string($_POST["name"]);
                }*/
$email = $_POST["email"];
if (empty($_POST["email"])) {
                $emailErr = "email is required";
                $validationstatus=1;
                }/* else {
                $email = mysqli_real_escape_string($_POST["email"]);
                }*/
$phone = $_POST["phone"];
if (empty($_POST["phone"])) {
                $phoneErr = "phone is required";
                $validationstatus=1;
                }/* else {
                $phone = mysqli_real_escape_string($_POST["phone"]);
                }*/

        $gender = $_POST['gender'];
if (empty($_POST['gender'])) {
                $genderErr = "gender is required";
                $validationstatus=1;
                }/*else {
                $gender = ($_POST['gender']);
                }*/
$address = $_POST["address"];
if (empty($_POST["address"])) {
                $addressErr = "address is required";
                $validationstatus=1;
                }/* else {
                $address = mysqli_real_escape_string($_POST["address"]);
                }*/

        $image = $_FILES["image"]["name"];
if (empty($_FILES["image"]["name"])) {
                $imageErr = "image is required";
                $validationstatus=1;
                }/* else {
                $image = mysqli_real_escape_string($_POST["image"]);
                }*/

if (empty($_POST["password"])) {
                $passwordErr = "password is required";
                $validationstatus=1;
                }else {
                $password = ($_POST['password']);
                }

if (empty($_POST["cpassword"])) {
                $cpasswordErr = "confirm password is required";
                $validationstatus=1;
                }/* else {
                $cpassword = mysqli_real_escape_string($_POST["cpassword"]);
                }*/


/*image validation start*/
if (isset($_FILES["image"])) {
    $allowedExts = array("GIF", "JPEG", "JPG", "PNG");
    $extension = explode(".", $_FILES["image"]["name"]);
    $arrayCount = count($extension);
    $uploadFileName = strtoupper($extension[$arrayCount - 1]);
    if(in_array($uploadFileName, $allowedExts))
    {
      
      /*$target_dir = "../uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);

      if (move_uploaded_file($_FILES["image"]["name"], $target_file)) {
        echo "The file ".basename($_FILES["image"]["name"]). " has been uploaded";
      }else{
          echo "Sorry, there was an error uploading your file";
      }*/
      $filename = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "upload/".$filename;
      move_uploaded_file($tempname, $folder);
      /*echo "<img src='$folder' height='200' width='200'/>";*/
    
    }else{

    }
  }
/*END*/

    if($validationstatus==0){


      //$result = $mysqli->mysqli_query("SELECT * FROM customer_master WHERE email=".$email);
      

      $cnt=0;
      
      $sql="SELECT * FROM customer_master where email='".$email."'";
      if ($result=mysqli_query($mysqli,$sql)){
         $cnt = mysqli_num_rows($result);
      }
      
    if($cnt==0)
    {
    
    $sql = "INSERT into customer_master(name, email, phone, gender, address, image, password)VALUES('$name','$email','$phone','$gender','$address','$image','$password')";

      if ($mysqli->query($sql) === TRUE) 
      {
        
        echo "Data Inserted!!!";
        header("location: login-demo.php");
      
      } else {
        echo "error!".$sql;
      }
        //header("location: index.php");
    }else{
      $emailErr = "This email is already registered.";
    }
  }
}

}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration Customer</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <style type="text/css">


  #logo{
    margin-left: 35%;
    margin-right: auto;
  }

  .error{
    color: red;
  }

	body {
		font-family: 'Roboto', sans-serif;
		background-image: url("./images/ab1.jpg");
	    background-repeat: no-repeat;
	    background-size: 1400px 1150px;
	}
    .form-control {
		font-size: 16px;
		transition: all 0.4s;
		box-shadow: none;
	}
	.form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
		outline: none !important;
    }

    .concard{
-webkit-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
-moz-box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
box-shadow: 0px 1px 35px 2px rgba(0,0,0,0.8);
}

	.signup-form {
		width: 480px;
    	margin: 0 auto;
		padding: 30px 0;
	}
    .signup-form form {
		border-radius: 5px;
    	margin-bottom: 20px;
        background: transparent;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
	.signup-form a {
		color: #5cb85c;
	}    
	.signup-form h2 {
		text-align: center;
		font-size: 34px;
		margin: 10px 0 15px;
	}
	.signup-form .hint-text {
		color: #999;
		text-align: center;
		margin-bottom: 20px;
	}
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form .btn {        
        font-size: 18px;
		line-height: 26px;
        font-weight: bold;
		text-align: center;
    }
	.signup-btn {
		text-align: center;
		border-color: #5cb85c;
		transition: all 0.4s;
	}
	.signup-btn:hover {
		background: #5cb85c;
		opacity: 0.8;
	}
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
		width: 40px;
		height: 40px;
		font-size: 16px;
		text-align: center;
		line-height: 40px;
		background: #fff;
		display: inline-block;
        border: 1px solid #e0e0e0;
		border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
    .social-btn .btn {
		color: #fff;
        margin: 10px 0 0 15px;
		font-size: 15px;
		border-radius: 50px;
		font-weight: normal;
		border: none;
		transition: all 0.4s;
    }	
	.social-btn .btn:first-child {
		margin-left: 0;
	}
	.social-btn .btn:hover {
		opacity: 0.8;
	}
	.social-btn .btn-primary {
		background: #507cc0;
	}
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
	.social-btn .btn i {
		float: left;
		margin: 3px 10px;
		font-size: 20px;
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

  .ts{
    text-shadow: 2px 3px 3px black;
  }
  .tse{
    text-shadow: 1px 1px 1px black;
  }
  .tsr{
    text-shadow: 2px 2px 2px black;
  }



</style>
</head>
<body>




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
    </div>
  </div>



<div class="signup-form concard">

    <form action="reg-demo.php" method="POST" enctype="multipart/form-data">

      <img src="images/logo-c.png" height="100px" width="100px" class="img-responsive" id="logo">

		<h2 class="text-white ts">Create an Account</h2>

		<!-- <p class="hint-text">Sign up with your social media account or email address</p>
		<div class="social-btn text-center">
			<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
			<a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
			<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
		</div>
		<div class="or-seperator"><b>or</b></div> -->

      <br>
        <div class="form-group">
        	<input type="text" class="form-control input-lg" id="name" name="name" value="<?php echo ($name)?$name:""; ?>" placeholder="Username">
          <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $nameErr;?></span>
        </div>
        
		    <div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" value="<?php echo ($email)?$email:""; ?>" placeholder="Email Address" id="email">
          <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $emailErr;?></span>
        </div>

        <div class="form-group">
        	<input type="tel" class="form-control input-lg" name="phone" value="<?php echo ($phone)?$phone:""; ?>" placeholder="Phone" maxlength="10">
          <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $phoneErr;?></span><span class="warning"> <?php echo $error; ?></span>
        </div>


        <div style="padding-bottom: 20px;">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="gender" id="male" value="Male<?php if($gender){ echo $gender; } ?>" class="custom-control-input" checked="checked">
            <label class="custom-control-label text-white tsr" for="male">Male</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="gender" id="female" value="Female<?php if($gender){ echo $gender; } ?>" class="custom-control-input">
            <label class="custom-control-label text-white tsr" for="female">Female</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="gender" id="other" value="Other<?php if($gender){ echo $gender; } ?>" class="custom-control-input">
            <label class="custom-control-label text-white tsr" for="other">Other</label>
          </div>
          <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $genderErr;?></span>
        </div>


        <div class="form-group">
            <input type="address" class="form-control input-lg" name="address" value="<?php echo ($address)?$address:""; ?>" placeholder="Address">
            <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $addressErr;?></span>
        </div>

        <div style="padding-bottom: 20px;">
          <div class="custom-file">
			    	<input type="file" name="image" value="<?php if($image){ echo $image; } ?>" class="custom-file-input" id="image" aria-describedby="image">
			    	<label class="custom-file-label" for="image">Choose file</label>
            <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $imageErr;?></span>
          </div>
			  </div>

    		<div class="form-group">
              <input type="password" class="form-control input-lg" name="password" placeholder="Enter password" id="password"  placeholder="Enter password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $passwordErr;?></span>
        </div>

    		<div class="form-group">
              <input type="password" class="form-control input-lg" name="cpassword" placeholder="Confirm Password">
              <span class="error tse">&nbsp&nbsp&nbsp&nbsp<?php echo $cpasswordErr;?></span>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn tsr"  name="add">Sign Up</button>
        </div>
    </form>

    <div class="text-center">Already have an account? <a href="login-demo.php">Login here</a></div>

</div>


    <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("password");
var capital = document.getElementById("password");
var number = document.getElementById("password");
var length = document.getElementById("password");

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>                            