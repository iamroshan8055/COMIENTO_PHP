<?php

$mysqli = new mysqli('localhost','root','','customer');
$result = mysqli_query($mysqli,"SELECT * FROM customer_master");


?>
<html>
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Customer_List</title>
</head>
<body>
	<form action="add.php" mathod="POST">
	<h1 align="center">Customer_List</h1>
	<table align="center" class="table">
		<tr>
			<th class="thead-dark">name</th>
			<th class="thead-dark">email</th>
			<th class="thead-dark">phone</th>
			<th class="thead-dark">gender</th>
			<th class="thead-dark">address</th>
			<th class="thead-dark">image</th>
			<th><a href="add.php" class="btn btn-success" role="button"><span class="glyphicon glyphicon-print"></span>Add</a></th>
		</tr>
		<?php
			while ($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['phone']."</td>";
			echo "<td>".$res['gender']."</td>";
			echo "<td>".$res['address']."</td>";
			echo "<td>".$res['image']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\" class=\"btn btn-primary\" role=\"button\">Edit</a> | <a href=\"delete.php?id=$res[id]\" class=\"btn btn-danger\" role=\"button\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";	


			}


		?>


		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



	</table>
</body>
</html>