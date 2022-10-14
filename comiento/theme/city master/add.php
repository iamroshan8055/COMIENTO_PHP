<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php

$citynameErr = "";
$cityname = "";

$validationstatus=0;


if(isset($_POST['add'])) {
	

		

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  	
$cityname = trim($_POST["cityname"]);
if (empty(trim($_POST["cityname"]))) {
    						$nameErr = "City name is required";
    						$validationstatus=1;
  							}/* else {
    						$name = mysqli_real_escape_string($_POST["name"]);
  							}*/

		if($validationstatus==0){


			//$result = $mysqli->mysqli_query("SELECT * FROM customer_master WHERE email=".$email);
		
		$sql = "INSERT into city_master(cityname)VALUES('$cityname')";

			if ($mysqli->query($sql) === TRUE) 
			{
				
				echo "Data Inserted!!!";
				header("location: home.php");
			
			} else {
				echo "error!".$sql;
			}
				//header("location: home.php");
		}
	}
}
  ?>
 <html>
 <head>
 	<meta charset="UTF-8">

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 	<title>Customer List</title>
 	<style type="text/css">
 		.error{
 			color: red;
 		}
 	</style>
 </head>
 <body>
 	<h1 align="center">Customer List</h1>
 	<form action="add.php" class="form-group" method="POST" enctype="multipart/form-data">
 		<table align="center">
 			<tr>
				<div class="form-group">
		    		<td><label>City Name</label></td>
		    		<td><input type="text" name="cityname" value="<?php echo ($cityname)?$cityname:""; ?>"class="form-control" id="name" placeholder="Enter city Name">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $citynameErr;?></span></td>
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
 