<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php
$id = $_GET['id'];

$citynameErr = "";
$cityname = "";

$validationstatus=0;

if (isset($_POST["update"]))
{
 
$cityname = trim($_POST["cityname"]);
if (empty(trim($_POST["cityname"]))) {
    						$citynameErr = "City Name is required";
    						$validationstatus=1;
  							}/* else {
    						$name = mysqli_real_escape_string($_POST["name"]);
  							}*/

   	 	if($validationstatus==0){


			//$result = $mysqli->mysqli_query("SELECT * FROM customer_master WHERE email=".$email);
			

 		$result = mysqli_query($mysqli,"UPDATE city_master SET cityname = '".$cityname."'  WHERE id= ".$id);

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
$result = mysqli_query($mysqli,"SELECT * FROM city_master WHERE id=".$id);

while ($res = mysqli_fetch_array($result)) {
	$cityname = $res['cityname'];
}
?>
<html>
<head>
	<meta charset="UTF-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>Edit Customer Details</title>
	<style>
		.error {color: #FF0000;}
		</style>
</head>
<body>
	<form class="form-group" method="post" enctype="multipart/form data" action="edit.php?id=<?php echo $_GET["id"];?>">
	<h1 align="center">Edit Customer Details</h1>
	<table align="center">
		
		<tr>
			<div class="form-group">
				<td><lable>City Name</lable></td>
				<td><input type="text" name="cityname" value="<?php echo $cityname;?>" class="form-control" id="cityname"></td>
			
				<tr><td>
	  							<span class="error"> <?php echo $citynameErr;?></span>
				</td></tr>
			</div>
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