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
if (isset($_FILES["image"]["name"])) {
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$extension = explode(".", $_FILES["image"]["name"]);
		$arrayCount = count($extension);
		$uploadFileName = strtolower($extension[$arrayCount - 1]);
		if(in_array($uploadFileName, $allowedExts))
		{
			
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);

			if (move_uploaded_file($_FILES["image"]["name"], $target_file)) {
				echo "The file ".basename($_FILES["image"]["name"]). " has been uploaded";
			}else{
					echo "Sorry, there was an error uploading your file";
			}
		
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
				header("location: login-cust.php");
			
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
 <html>
 <head>
 	<meta charset="UTF-8">

 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 	<title>Register</title>
 	<style type="text/css">
 		.error{
 			color: red;
 		}
 	</style>
 </head>
 <body>
 	<div class="container" style="align-content: center;">
 	<h1 align="center">Registration</h1>
 	<form action="reg.php" class="form-group" method="POST" enctype="multipart/form-data">
 		<table align="center">
 			<tr>
				<div class="form-group">
		    		<td><label>Name</label></td>
		    		<td><input type="text" name="name" value="<?php echo ($name)?$name:""; ?>" class="form-control" id="name" placeholder="Enter Your Name">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $nameErr;?></span></td>
				</td></tr>
				</div>
 			</tr>

 			<tr>
				<div class="form-group">
		    		<td><label>Email</label></td>
		    		<td><input type="email" name="email" value="<?php echo ($email)?$email:""; ?>" class="form-control" id="email" placeholder="Enter Your Email">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $emailErr;?></span></td>
				</td></tr>
				</div>
			</tr>

 			<tr>
 				<div class="form-group">
		    		<td><label>Phone</label></td>
		    		<td><input type="tel" name="phone" value="<?php echo ($phone)?$phone:""; ?>" class="form-control" id="phone" placeholder="Enter Mobile Number" maxlength="10">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $phoneErr;?></span><span class="warning"> <?php echo $error; ?></span></td>
				</td></tr>
				</div>
 				
 			</tr>
 			<tr>
				<div class="form-group">
				<td><label>Gender</label></td>
				</div>
				<td>
 					<div class="custom-control custom-radio custom-control-inline">
 						<input type="radio" name="gender" id="male" value="Male<?php if($gender){ echo $gender; } ?>" class="custom-control-input" checked="checked">
 					  <label class="custom-control-label" for="male">Male</label>
					</div>
 					<div class="custom-control custom-radio custom-control-inline">
 						<input type="radio" name="gender" id="female" value="Female<?php if($gender){ echo $gender; } ?>" class="custom-control-input">
 					  <label class="custom-control-label" for="female">Female</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
 						<input type="radio" name="gender" id="other" value="Other<?php if($gender){ echo $gender; } ?>" class="custom-control-input">
 					  <label class="custom-control-label" for="other">Other</label>
					</div>
 				</td>
 				    <tr><td>
 			
  							<td><span class="error"> <?php echo $genderErr;?></span></td>
					</td></tr>
 					</div>
 			</tr>

 			<tr>	

				<div class="form-group">
		    		<td><label>Address</label></td>
		    		<td><input type="textarea" name="address" value="<?php echo ($address)?$address:""; ?>" class="form-control" id="address" placeholder="Enter Address">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $addressErr;?></span></td>
				</td></tr>
				</div>

 			</tr>
 			<tr>	
				<td>
					<div class="form-group">
						<label>Image</label>
					</div>
				</td>
				<td>
					<div class="custom-file">
			    	<input type="file" name="image" value="<?php if($image){ echo $image; } ?>" class="custom-file-input" id="image" aria-describedby="image">
			    	<label class="custom-file-label" for="image">Choose file</label>
			  		</div>
			  	</td>
			  	<tr><td>
  							<td><span class="error"> <?php echo $imageErr;?></span></td>
				</td></tr>
 			</tr>
 			<tr>	
				<div class="form-group">
		    		<td><label>Password</label></td>
		    		<td><input type="password" name="password" class="form-control" placeholder="Enter password" id="password"  placeholder="Enter password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $passwordErr;?></span></td>
				</td></tr>
				</div>
 			</tr>

 			<tr>	
				<div class="form-group">
		    		<td><label>Confirm Password</label></td>
		    		<td><input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $cpasswordErr;?></span></td>
				</td></tr>
				</div>
 			</tr>

			<tr>
				<td><button class="btn btn-primary" type="submit" name="add">Add</button></td>
			</tr>

 		</table>
 	</form>
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