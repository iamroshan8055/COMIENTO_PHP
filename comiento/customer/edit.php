<?php

$mysqli = new mysqli('localhost','root','','customer');
$id = $_GET['id'];



if (isset($_POST["update"]))
{
 	$id = mysqli_real_escape_string($mysqli,$_POST['id']);

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
   	 else{

 		$result = mysqli_query($mysqli,"UPDATE customer_master SET name = '".$name."',email = '".$email."',phone = '".$phone."',gender = '".$gender."',address = '".$address."',image = '".$image."'  WHERE id= ".$id);


 		header('location: home.php');

		  }
}

?>

<?php 
$result = mysqli_query($mysqli,"SELECT * FROM customer_master WHERE id=".$id);

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

	<title>Edit Customer Details</title>
</head>
<body>
	<form class="form-group" method="POST" enctype="multipart/form data"action="edit.php?id=<?php echo $_GET["id"];?>">
	<h1 align="center">Edit Customer Details</h1>
	<table align="center">

		<tr>
			<div class="form-group">
		    		<td><label>Name</label></td>
		    		<td><input type="text" name="name" value="<?php echo ($name)?$name:""; ?>"class="form-control" id="name">
		  			</td>
			</div>
		</tr>
		<tr>
			<div class="form-group">
		    		<td><label>Name</label></td>
		    		<td><input type="text" name="email" value="<?php echo ($email)?$email:""; ?>"class="form-control" id="email">
		  			</td>
			</div>
		</tr>
		<tr>
			<div class="form-group">
		    		<td><label>Phone</label></td>
		    		<td><input type="text" name="phone" value="<?php echo ($phone)?$phone:""; ?>"class="form-control" id="phone">
		  			</td>
			</div>
		</tr>
		<tr>
	
			<td>Gender</td>
			<td><input type="radio" name="gender" <?php if($gender=="Male"){ echo " checked"; } ?> value="Male">Male

			<input type="radio" name="gender" <?php if($gender=="Female"){ echo " checked"; } ?> value="Female">Female
			</td>

				<!--	<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="male" name="gender" <?php if($gender == "Male"){echo "checked";} ?>class="custom-control-input">
					  <label class="custom-control-label">Male</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="male" name="gender" <?php if($gender == "Female"){echo "checked";} ?>class="custom-control-input">
					  <label class="custom-control-label">Female</label>
					</div>-->

				</td>

		</tr>
		<tr>
			<td>Adderss</td>
			<td><input type="textarea" name="address" value="<?php echo $address;?>"></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="image" value="<?php echo $image;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			<td><input type="submit" name="update" value="UPDATE"></td>
		</tr>

	</table>		

	</form>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>