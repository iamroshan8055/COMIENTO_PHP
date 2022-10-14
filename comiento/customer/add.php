<?php
session_start();

$mysqli = new mysqli('localhost','root','','customer');

$nameErr = $emailErr = $phoneErr = $genderErr = $addressErr = $imageErr = $passwordErr = $cpasswordErr = "";
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
if (empty($_POST["gender"])) {
    						$genderErr = "gender is required";
    						$validationstatus=1;
  							}/* else {
    						$gender = mysqli_real_escape_string($_POST["gender"]);
  							}*/
$address = $_POST["address"];
if (empty($_POST["address"])) {
    						$addressErr = "address is required";
  							$validationstatus=1;
  							}/* else {
    						$address = mysqli_real_escape_string($_POST["address"]);
  							}*/

        $image = $_POST['image'];
if (empty($_POST["image"])) {
    						$imageErr = "image is required";
  							$validationstatus=1;
  							}/* else {
    						$image = mysqli_real_escape_string($_POST["image"]);
  							}*/

if (empty($_POST["password"])) {
    						$passwordErr = "password is required";
  							$validationstatus=1;
  							}/* else {
    						$password = mysqli_real_escape_string($_POST["password"]);
  							}*/

if (empty($_POST["cpassword"])) {
    						$cpasswordErr = "confirm password is required";
  							$validationstatus=1;
  							}/* else {
    						$cpassword = mysqli_real_escape_string($_POST["cpassword"]);
  							}*/


/*Image validation start*/
		$allowedExts = array("GIF", "JPEG", "JPG", "PNG");
		$extension = explode(".", $_FILES["image"]["name"]);
		$arrayCount = count($extension);
		$uploadFileName = strtoupper($extension[$arrayCount - 1]);
		if(in_array($uploadFileName, $allowedExts))
		{
			echo "valid";
		}else{
			echo "Invalid";
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
 	<meta charset="UTF-8">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 	<title>Customer_List</title>
 </head>
 <body>
 	<h1 align="center">Customer_List</h1>
 	<form action="add.php" class="form-group" method="POST" enctype="multipart/form data">
 		<table align="center">
 			<tr>
				<div class="form-group">
		    		<td><label>Name</label></td>
		    		<td><input type="text" name="name" value="<?php echo ($name)?$name:""; ?>"class="form-control" id="name" placeholder="Bruce Wayne">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $nameErr;?></span>
				</td></tr>
				</div>
 			</tr>

 			<tr>
				<div class="form-group">
		    		<td><label>Email</label></td>
		    		<td><input type="email" name="email" value="<?php echo ($email)?$email:""; ?>"class="form-control" id="name" placeholder="bruce@bat.com">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $emailErr;?></span>
				</td></tr>
				</div>
			</tr>

 			<tr>
 				<div class="form-group">
		    		<td><label>Phone</label></td>
		    		<td><input type="number" name="phone" value="<?php echo ($phone)?$phone:""; ?>"class="form-control" id="name" placeholder="8160171771">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $phoneErr;?></span>
				</td></tr>
				</div>
 				
 			</tr>
 			<tr>
				<div class="form-group">
				<td><label>Gender</label></td>
				</div>
				<td>

					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="male" name="gender" class="custom-control-input">
					  <label class="custom-control-label" for="male">Male</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="female" name="gender" class="custom-control-input">
					  <label class="custom-control-label" for="female">Female</label>
					</div>

				</td>
 			</tr>

 			<tr>	

				<div class="form-group">
		    		<td><label>Address</label></td>
		    		<td><input type="textarea" name="address" value="<?php echo ($address)?$address:""; ?>"class="form-control" id="name" placeholder="Wayne Manor, Gotham">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $addressErr;?></span>
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
  							<span class="error"> <?php echo $imageErr;?></span>
				</td></tr>
 			</tr>
 			<tr>	
				<div class="form-group">
		    		<td><label>Password</label></td>
		    		<td><input type="password" name="password" class="form-control" id="name" placeholder="Choose a strong password">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $passwordErr;?></span>
				</td></tr>
				</div>
 			</tr>

 			<tr>	
				<div class="form-group">
		    		<td><label>Confirm Password</label></td>
		    		<td><input type="password" name="cpassword" class="form-control" id="name" placeholder="Confirm Password">
		  			</td>
		  		<tr><td>
  							<span class="error"> <?php echo $cpasswordErr;?></span>
				</td></tr>
				</div>
 			</tr>

			<tr>
				<td><button class="btn btn-primary" type="submit" name="add">Add</button></td>
			</tr>

 		</table>

 	</form>

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 </body>
 </html>