<?php
session_start();
$mysqli = new mysqli('localhost','root','','preg');

if($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_POST['submit'])) {


      $email = mysqli_real_escape_string($mysqli,$_POST['email']);
      $password = mysqli_real_escape_string($mysqli,$_POST['password']); 
      
      $sql = "SELECT * FROM admin_master WHERE email = '".$email."' and password = '".$password."'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      

    if (!empty($row)) {
         $_SESSION["login_data"] = $row;
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: home.php");
    } else {
        $message = "Email or password is not match.";
        echo "<script type='text/javascript'>alert('".$message."');</script>";
        //header("Location: home.php");
    }
    

      //if ((empty(email) == true) && (empty(password) == true)) {
        // echo "ben11010100";
    //  }
      
      if($sql == true) {
         echo "Welcome ";
         header("location: theme/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
     
      
      
?>

<body>
	<form method="POST" action="login.php">
		<label class="label">Email :</label> 	<input type="email" name="email" placeholder="Enter Your email" class="input" required=""><br><br>
		<label class="label">Password:</label> 	<input type="password" name="password" placeholder="Enter Your Password" class="input" required=""><br><br>
		<input type="submit" name="submit" value="submit">

	</form>
</body>
