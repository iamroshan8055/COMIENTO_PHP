<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php

$restaurantnameErr = $cityErr  = $emailErr = $phoneErr = $addressErr = $imageErr = $cuisineErr = $categoryErr = $passwordErr = $cpasswordErr = "";
$restaurantname = $city  = $email = $phone = $address = $pincode = $image = $cuisine = $category = $password = $cpassword = "";

$validationstatus=0;


if(isset($_POST['add'])) {
	

		

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//die();
if ($_POST['password'] != $_POST['cpassword']) {
    						$cpasswordErr = "Confirm password not match.";
    						$validationstatus=1;
  							}
  	
$restaurantname = trim($_POST["restaurantname"]);
if (empty(trim($_POST["restaurantname"]))) {
    						$restaurantnameErr = "restaurantname is required";
    						$validationstatus=1;
  							}/* else {
    						$restaurantname = mysqli_real_escape_string($_POST["restaurantname"]);
  							}*/

$city = $_POST["city"];
if (empty($_POST["city"])) {
    						$cityErr = "city is required";
  							$validationstatus=1;
  							}/* else {
    						$city = mysqli_real_escape_string($_POST["city"]);
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

$address = $_POST["address"];
if (empty($_POST["address"])) {
    						$addressErr = "address is required";
  							$validationstatus=1;
  							}/* else {
    						$address = mysqli_real_escape_string($_POST["address"]);
  							}*/

$cuisine = $_POST["cuisine"];
if (empty($_POST["cuisine"])) {
    						$cuisineErr = "cuisine is required";
  							$validationstatus=1;
  							}/* else {
    						$cuisine = mysqli_real_escape_string($_POST["cuisine"]);
  							}*/

$category = $_POST["category"];
if (empty($_POST["category"])) {
    						$categoryErr = "category is required";
  							$validationstatus=1;
  							}/* else {
    						$category = mysqli_real_escape_string($_POST["category"]);
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


			//$result = $mysqli->mysqli_query("SELECT * FROM restaurant_master WHERE email=".$email);
			

			$cnt=0;
			
			$sql="SELECT * FROM restaurant_master where email='".$email."'";
			if ($result=mysqli_query($mysqli,$sql)){
				 $cnt = mysqli_num_rows($result);
			}
			
		if($cnt==0)
		{
		
		$sql = "INSERT into restaurant_master(restaurantname, city, email, phone, address, pincode, cuisine, category, image, password)VALUES('$restaurantname','$city','$email','$phone','$address','$pincode','$cuisine','$category','$image','$password')";

			if ($mysqli->query($sql) === TRUE) 
			{
				
				echo "Data Inserted!!!";
			
			} else {
				echo "error!".$sql;
			}
				header("location: home.php");
		}else{
			$emailErr = "This email is already registered.";
		}
	}
}

}
  ?>
 <html>
 <head>
 	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

 	<title>Restaurant List</title>
 	<style type="text/css">
 		.error{
 			color: red;
 		}
 	</style>
 </head>
 <body>
 	<h1 align="center">Restaurant List</h1>
 	<form action="add.php" class="form-group" method="POST" enctype="multipart/form-data">
 		<table align="center">
 			<tr>
				<div class="form-group">
		    		<td><label>Name</label></td>
		    		<td><input type="text" name="restaurantname" value="<?php echo ($restaurantname)?$restaurantname:""; ?>"class="form-control" id="restaurantname" placeholder="Enter Restaurant Name">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $restaurantnameErr;?></span></td>
				</td></tr>
				</div>
 			</tr>

 			<tr>	

				<div class="form-group">
		    		<td><label>city</label></td>
		    		<td><input type="text" name="city" value="<?php echo ($city)?$city:""; ?>"class="form-control" id="name" placeholder="Enter city">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $cityErr;?></span></td>
				</td></tr>
				</div>

 			</tr>

 			<tr>
				<div class="form-group">
		    		<td><label>Email</label></td>
		    		<td><input type="email" name="email" value="<?php echo ($email)?$email:""; ?>"class="form-control" id="name" placeholder="Enter Restaurant Email">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $emailErr;?></span></td>
				</td></tr>
				</div>
			</tr>

 			<tr>
 				<div class="form-group">
		    		<td><label>Phone</label></td>
		    		<td><input type="tel" name="phone" value="<?php echo ($phone)?$phone:""; ?>"class="form-control" id="name" placeholder="Enter Mobile Number" maxlength="13">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $phoneErr;?></span></td>
				</td></tr>
				</div>
 				
 			</tr>

 			<tr>	

				<div class="form-group">
		    		<td><label for="exampleFormControlTextarea1">Address</label></td>
		    		<td><textarea name="address" value="<?php echo ($address)?$address:""; ?>"class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address"></textarea>
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $addressErr;?></span></td>
				</td></tr>
				</div>

 			</tr>

 			<tr>
 				<div class="form-group">
		    		<td><label>Pincode</label></td>
		    		<td><input type="tel" name="pincode" value="<?php echo ($pincode)?$pincode:""; ?>"class="form-control" id="pincode" placeholder="Enter Mobile Number" maxlength="8">
		  			</td>
				</div>
 				
 			</tr>

 			<tr>
			<div class="form-group">
		    		<td><label>Cuisine</label></td>
		    		<td><input type="text" name="cuisine" value="<?php echo ($cuisine)?$cuisine:""; ?>"class="form-control" id="cuisine" placeholder="Enter cuisine">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $cuisineErr;?></span></td>
				</td></tr>
				</div>

		</tr>

 			<tr>

				<div class="form-group">
					<td><label>Category</label></td>
					<td>
					<select name="category" class="custom-select mb-3">
				      <option value="">--Select Category--</option>
				      <option value="veg">veg</option>
				      <option value="non-veg">non-veg</option>
				      <option value="veg/non-veg">veg/non-veg</option>
				    </select>
				    <td>
				<tr><td>
  							<td><span class="error"> <?php echo $categoryErr;?></span></td>
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
		    		<td><input type="password" name="password" id="password" class="form-control" placeholder="Enter password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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