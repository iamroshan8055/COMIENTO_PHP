<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php
$id = $_GET['id'];

$restaurantnameErr = $cityErr = $emailErr = $phoneErr = $addressErr = $cuisineErr = $categoryErr = $imageErr = "";
$restaurantname = $city = $email = $phone = $address = $pincode = $category = $cuisine = $image = "";

$validationstatus=0;

if (isset($_POST["update"]))
{
 
$restaurantname = trim($_POST["restaurantname"]);
if (empty(trim($_POST["restaurantname"]))) {
    						$restaurantnameErr = "restaurantName is required";
    						$validationstatus=1;
  							}/* else {
    						$restaurantname = mysqli_real_escape_string($_POST["restaurantname"]);
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

$city = $_POST["city"];
if (empty($_POST["city"])) {
    						$cityErr = "city is required";
  							$validationstatus=1;
  							}/* else {
    						$city = mysqli_real_escape_string($_POST["city"]);
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

        $image = $_POST['image'];
if (empty($_POST["image"])) {
    						$imageErr = "image is required";
  							$validationstatus=1;
  							}/* else {
    						$image = mysqli_real_escape_string($_POST["image"]);
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

 	/*$id = mysqli_real_escape_string($mysqli,$_POST['id']);

 	$name = mysqli_real_escape_string($mysqli,$_POST['name']);
 	$email = mysqli_real_escape_string($mysqli,$_POST['email']);
 	$phone =  mysqli_real_escape_string($mysqli,$_POST['phone']);
 	$gender =  mysqli_real_escape_string($mysqli,$_POST['gender']);
 	$address = mysqli_real_escape_string($mysqli,$_POST['address']);
 	$image = mysqli_real_escape_string($mysqli,$_POST['image']);

	if(empty($name) || empty($email) || empty($phone) || empty($gender) || empty($address) || empty($image))
	{
		
		if (empty($name)) {
			echo "<font color='red'>Name cannot be empty!!</font>";
		}
		if (empty($email)) {
			echo "<font color='red'>Email cannot be empty!!</font>";
		}
		if (empty($phone)) {
			echo "<font color='red'>Phone cannot be empty!!</font>";
		}
		if (empty($gender)) {
			echo "<font color='red'>Gender cannot be empty!!</font>";
		}
		if (empty($address)) {
			echo "<font color='red'>Address cannot be empty!!</font>";
		}
		if (empty($image)) {
			echo "<font color='red'>Image cannot be empty!!</font>";
		}


 	} 
   	 else{*/

   	 	if($validationstatus==0){


			//$result = $mysqli->mysqli_query("SELECT * FROM customer_master WHERE email=".$email);
			

 		$result = mysqli_query($mysqli,"UPDATE restaurant_master SET restaurantname = '".$restaurantname."',city = '".$city."',email = '".$email."',phone = '".$phone."',address = '".$address."',pincode = '".$pincode."',cuisine = '".$cuisine."',category = '".$category."',image = '".$image."'  WHERE id= ".$id);

 			if ($mysqli->query($result) === TRUE) 
			{
				
				echo "Data Inserted!!!";
			
			} else {
				echo "error!".$result;
			}
		}
	}

?>

<?php 
$result = mysqli_query($mysqli,"SELECT * FROM restaurant_master WHERE id=".$id);

while ($res = mysqli_fetch_array($result)) {
	$restaurantname = $res['restaurantname'];
	$city = $res['city'];
	$email = $res['email'];
	$phone = $res['phone'];
	$address = $res['address'];
	$image = $res['image'];
	$cuisine = $res['cuisine'];
	$category = $res['category'];
}
?>
<html>
<head>
	<meta charset="UTF-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>Edit restaurant Details</title>
	<style>
		.error {color: #FF0000;}
		</style>
</head>
<body>
	<form class="form-group" method="post" enctype="multipart/form data" action="edit.php?id=<?php echo $_GET["id"];?>">
	<h1 align="center">Edit restaurant Details</h1>
	<table align="center">
		
		<tr>
			<div class="form-group">
		    		<td><label>Restaurant Name</label></td>
		    		<td><input type="text" name="restaurantname" value="<?php echo ($restaurantname)?$restaurantname:""; ?>"class="form-control" id="restaurantname" placeholder="Enter Your restaurantname">
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
		    		<td><input type="email" name="email" value="<?php echo ($email)?$email:""; ?>"class="form-control" id="name" placeholder="Enter Your Email">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $emailErr;?></span></td>
				</td></tr>
				</div>
		</tr>

		<tr>
			<div class="form-group">
		    		<td><label>Phone</label></td>
		    		<td><input type="tel" name="phone" value="<?php echo ($phone)?$phone:""; ?>"class="form-control" id="phone" placeholder="Enter Mobile Number" maxlength="13">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $phoneErr;?></span><span class="warning">
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
		    		<td><input type="textarea" name="cuisine" value="<?php echo ($cuisine)?$cuisine:""; ?>"class="form-control" id="name" placeholder="Enter cuisine">
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