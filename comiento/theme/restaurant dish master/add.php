<?php

$mysqli = new mysqli('localhost','root','','admin_master');
?>



<?php

$restaurantnameErr = $typeErr = $planErr = $priceErr = "";
$restaurantname = $type = $plan = $price = "";

$validationstatus=0;


if(isset($_POST['add'])) {
	

		

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$restaurantname = $_POST["restaurantname"];
if (empty($_POST["restaurantname"])) {
    						$restaurantErr = "restaurant is required";
  							$validationstatus=1;
  							}/* else {
    						$restaurant = mysqli_real_escape_string($_POST["restaurant"]);
  							}*/

$type = $_POST["type"];
if (empty($_POST["type"])) {
    						$typeErr = "type is required";
  							$validationstatus=1;
  							}/* else {
    						$type = mysqli_real_escape_string($_POST["type"]);
  							}*/

$plan = $_POST["plan"];
if (empty($_POST["plan"])) {
    						$planErr = "plan is required";
  							$validationstatus=1;
  							}/* else {
    						$plan = mysqli_real_escape_string($_POST["plan"]);
  							}*/

$price = $_POST["price"];
if (empty($_POST["price"])) {
    						$priceErr = "price is required";
    						$validationstatus=1;
  							}/* else {
    						$price = mysqli_real_escape_string($_POST["price"]);
  							}*/


		if($validationstatus==0){
		
	 		$sql = "INSERT into restaurant_dish_master(restaurantname, type, plan, price,created_date)VALUES('$restaurantname','$type','$plan','$price','".date("Y-m-d H:i:s")."')";

			if ($mysqli->query($sql) === TRUE) 
			{
				
				echo "Data Inserted!!!";
			
			} else {
				echo "error!".$sql;
			}
				header("location: home.php");
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

 	<title>Restaurant dish List</title>
 	<style type="text/css">
 		.error{
 			color: red;
 		}
 	</style>
 </head>
 <body>
 	<h1 align="center">Restaurant dish List</h1>
 	<form action="add.php" class="form-group" method="POST" enctype="multipart/form-data">
 		<table align="center">

 			<?php

 			$resultSet = $mysqli->query("SELECT * FROM restaurant_master");

 			?>

 			<tr>

				<div class="form-group">
					<td><label>Restaurant Name&nbsp&nbsp</label></td>
					<td>
					<select name="restaurantname" class="custom-select mb-3">
				      
						<?php 

						while ($rows = $resultSet->fetch_assoc()) 
						{
							echo "<option value = '".$rows['id']."'>".$rows['restaurantname']."</option>";
						}
						
						?>
	
				    </select>
				    <td>
				<tr><td>
  							<td><span class="error"> <?php echo $restaurantnameErr;?></span></td>
				</td></tr>
				</div>

 			</tr>

 			<tr>

				<div class="form-group">
					<td><label>Type</label></td>
					<td>
					<select name="type" class="custom-select mb-3">
				      <option selected>- - - - - - Select Type - - - - - -</option>
				      <option value="lunch">Lunch</option>
				      <option value="dinner">Dinner</option>
				    </select>
				    <td>
				<tr><td>
  							<td><span class="error"> <?php echo $typeErr;?></span></td>
				</td></tr>
				</div>

 			</tr>

 			<tr>

				<div class="form-group">
					<td><label>plan</label></td>
					<td>
					<select name="plan" class="custom-select mb-3">
				      <option selected>- - - - - - Select plan - - - - - -</option>
				      <option value="fxlnch">Fix Lunch</option>
				      <option value="fxdinner">Fix Dinner</option>
				      <option value="unllunch">Unlimited Lunch</option>
				      <option value="unldinner">Unlimited Dinner</option>
				    </select>
				    <td>
				<tr><td>
  							<td><span class="error"> <?php echo $planErr;?></span></td>
				</td></tr>
				</div>

 			</tr>

 			<tr>
 				<div class="form-group">
		    		<td><label>Price</label></td>
		    		<td><input type="tel" name="price" value="<?php echo ($price)?$price:""; ?>"class="form-control" id="price" placeholder="Enter Price" maxlength="13">
		  			</td>
		  		<tr><td>
  							<td><span class="error"> <?php echo $priceErr;?></span></td>
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