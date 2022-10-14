<!DOCTYPE html>

<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "admin_master";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
define("base_url", "http://localhost/project/comiento/theme/");
?>

<html>
<head>
  <title>User Profile</title><meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Royal Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="main.css">



 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
#logo{
  margin-left: 35%;
  margin-right: auto;
}
body {
  background-color: white;
  background-image: url("./images/ab1.jpg");
  background-repeat: no-repeat;
  background-size: 1350px 1010px;
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
.btn-google:hover {
  color: white;
  background-color: #d43a2d;
}

.btn-facebook:hover {
  color: white;
  background-color: #2d4e94;
}
.z:hover{
	-webkit-box-shadow: inset 0px 0px 13px 3px rgba(0,0,0,0.43);
-moz-box-shadow: inset 0px 0px 13px 3px rgba(0,0,0,0.43);
box-shadow: inset 0px 0px 13px 3px rgba(0,0,0,0.43);
}


  #com:hover {
    display: inline-block;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: none;
    z-index: auto;
    width: auto;
    height: auto;
    position: static;
    cursor: default;
    opacity: 1;
    /*margin: 0;
    padding: 10px;*/
    overflow: visible;
    border: none;
    /*-webkit-border-radius: 0;
    border-radius: 0;
    font: normal 48px/normal "Warnes", Helvetica, sans-serif;
    color: rgb(252,95,15);*/
    text-decoration: normal;
    text-align: center;
    -o-text-overflow: clip;
    text-overflow: clip;
    white-space: pre;
    background: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;
    -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
    -webkit-transform: none;
    transform: none;
    -webkit-transform-origin: 50% 50% 0;
    transform-origin: 50% 50% 0;
  }
  .blinking{
    animation:blinkingText 2s infinite;
    animation:blinkingText 0.
     infinite;
  }
  @keyframes blinkingText{
      0%{     color: black;    }
      45%{    color: transparent; }
      22%{     color: #716733;    }
      24%{    color: transparent; }
      26%{     color: #716733;    }
      28%{    color: transparent; }
      30%{     color: #807632;    }
      32%{    color: transparent; }
      34%{     color: #716733;    }
      36%{    color: transparent; }
      38%{     color: #807632;    }
      40%{    color: transparent; }
      42%{     color: #716733;    }
      44%{    color: transparent; }
      48%{     color: #807632;    }
      50%{     color: #716733;    }
      52%{    color: transparent; }
      54%{     color: #F0E29A;    }
      80%{    color:white;  }
      97%{   text-shadow: 0 0 10px rgb(128,128,128) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
      100%{   text-shadow: 0 0 10px rgb(255,254,214) , 0 0 20px rgb(254,250,202) , 0 0 30px rgb(255,249,182) , 0 0 40px rgb(255,242,159) , 0 0 70px rgb(255,238,128) , 0 0 80px rgb(255,214,45) , 0 0 100px rgb(255,205,0) ;    }
  }


.up{
    -webkit-box-shadow: 5px 6px 7px 0px rgba(0,0,0,0.65);
-moz-box-shadow: 5px 6px 7px 0px rgba(0,0,0,0.65);
box-shadow: 5px 6px 7px 0px rgba(0,0,0,0.65);
}
.deco{
  
  text-shadow: 3px 3px 3px gray;
  text-decoration-color: #ccc;
}
</style>
<body>


      <div class="header">
        <div class="container">
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <div class="agileits-logo">
                <h1><a id="com" class="blinking" href="index.php">Comiento</a></h1>
              </div>
            </div>

          </nav>
        </div>
      </div>



  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <form action="#" method="GET" class="form-signin">


            <?php
              if (isset($_SESSION['session_login'])) { 
                $login="";
                  if(!empty($_POST["email"])){
                    $login .= "'".$_POST["email"]."'";
                  }

                //echo date('Y-m-d', strtotime("+30 days"));

            ?>

            <h3 class="text-center text-white deco"><b>&nbsp&nbsp YOUR PROFILE &nbsp&nbsp</b></h3>

            <?php echo "<a href='./images/".$_SESSION['session_login']["image"]."'><img value = '".$_SESSION['session_login']['email']."'' src='./images/".$_SESSION['session_login']["image"]."' class='img-responsive up' id='logo' width='100px' height='100px'></a>";
            ?>
            <h3 class="text-center"><b>&nbsp&nbsp<?=$_SESSION['session_login']["name"]?>&nbsp&nbsp</b></h3>
            <table>

              <tr><td class="card-text"><strong>Gender:-</strong></td><td><?=$_SESSION['session_login']["gender"]?></td></tr>
              <tr><td class="card-text"><strong>Email:-</strong></td><td><?=$_SESSION['session_login']["email"]?></td></tr>
              <tr><td class="card-text"><strong>Phone No.:-</strong></td><td><?=$_SESSION['session_login']["phone"]?></td></tr>
              <tr><td class="card-text"><strong>Purchase Date:-</strong>&nbsp&nbsp</td><td><?= $_SESSION['session_login']["purchase_date"]?></td></tr>
              <tr><td class="card-text"><strong>Expire Date:-</strong></td><td><?php
                                                                                     echo $date = $_SESSION['session_login']["expire_date"];
                                                                                  ?></td></tr>
              <tr><td class="card-text"><strong>Address:-</strong></td><td><?=$_SESSION['session_login']["address"]?></td></tr>
              <tr><td class="card-text"><strong>Tokens:-</strong></td><td><?=$_SESSION['session_login']["balance"]?></td></tr>
                

            </table>
              <br>

              <button class="btn btn-lg btn-primary btn-block text-uppercase z" type="submit">Edit Profile</button>
              </form>
              <hr class="my-4">
              <form action="#" method="GET" class="form-signin">
              <button class="btn btn-lg btn-google text-white btn-block text-uppercase z" type="submit">Book Table</button><br>
          	  </form>
              <form action="index.php" method="GET" class="form-signin">
              <button class="btn btn-lg btn-facebook text-white btn-block text-uppercase z" type="submit">GO TO HOME</button>
              </form>

              <?php } ?>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>