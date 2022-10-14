<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php
$id = $_GET['id'];

$nameErr = $emailErr = $phoneErr = $genderErr = $addressErr = $imageErr = "";
$name = $email = $phone = $gender = $address = $image = "";

$validationstatus=0;

if (isset($_POST["update"]))
{
 
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


			//$result = $mysqli->mysqli_query("SELECT * FROM admin_master WHERE email=".$email);
			

 		$result = mysqli_query($mysqli,"UPDATE admin_master SET name = '".$name."',email = '".$email."',phone = '".$phone."',gender = '".$gender."',address = '".$address."',image = '".$image."'  WHERE id= ".$id);

 			if ($mysqli->query($sql) === TRUE) 
			{
				
				echo "Data Inserted!!!";
			
			} else {
				echo "error!".$sql;
			}
				header("location: home.php");
		}
	}

?>

<?php 
$result = mysqli_query($mysqli,"SELECT * FROM admin_master WHERE id=".$id);

while ($res = mysqli_fetch_array($result)) {
	$name = $res['name'];
	$email = $res['email'];
	$phone = $res['phone'];
	$gender = $res['gender'];
	$address = $res['address'];
	$image = $res['image'];
}
?>
<html>
<head>
	<meta charset="UTF-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>Edit Admin Details</title>
	<style>
		.error {color: #FF0000;}
		</style>
</head>
<body>
	<form class="form-group" method="post" enctype="multipart/form data" action="edit.php?id=<?php echo $_GET["id"];?>">
	<h1 align="center">Edit Admin Details</h1>
	<table align="center">
		
		<tr>
			<div class="form-group">
				<td><lable>Name</lable></td>
				<td><input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="name"></td>
			
				<tr><td>
	  							<span class="error"> <?php echo $nameErr;?></span>
				</td></tr>
			</div>
		</tr>
		<tr>
			<div class="form-group">
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email;?>" class="form-control" id="email"></td>
			
				<tr><td>
	  							<span class="error"> <?php echo $emailErr;?></span>
				</td></tr>
			</div>
		</tr>
		<tr>
			<div class="form-group">
				<td>Phone</td>
				<td><input type="tel" name="phone" value="<?php echo $phone;?>" class="form-control" id="phone"  maxlength="10"></td>
			
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
						<input type="radio" id="male" name="gender" <?php if($gender=="Male"){ echo " checked"; } ?> value="Male" class="custom-control-input">
						<label class="custom-control-label" for="male">Male</label>
					</div>

					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="female" name="gender" <?php if($gender=="Female"){ echo " checked"; } ?> value="Female" class="custom-control-input">
						<label class="custom-control-label" for="female">Female</label>
					</div>

					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="other" name="gender" <?php if($gender=="Other"){ echo " checked"; } ?> value="Other" class="custom-control-input">
						<label class="custom-control-label" for="other">Other</label>
					</div>
				</td>
			
				<tr><td>
	  							<span class="error"> <?php echo $genderErr;?></span>
				</td></tr>
		</tr>
		<tr>
			<div class="form-group">
			<td>Adderss</td>
			<td><input type="textarea" name="address" value="<?php echo $address;?>" class="form-control" id="name" placeholder="Enter Address"></td>
		
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
			    	<input type="file" name="image" value="<?php echo $image;?>" class="custom-file-input" id="image" aria-describedby="image">
			    	<label class="custom-file-label" for="image">Choose file</label>
			  		</div>
			  	</td>
			  	<tr><td>
  							<td><span class="error"> <?php echo $imageErr;?></span></td>
				</td></tr>
 			</tr>
		<tr>
			<td><input class="btn btn-primary" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			<td><input class="btn btn-primary" type="submit" name="update" value="UPDATE"></td>
		</tr>		
	</table>		

	</form>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>