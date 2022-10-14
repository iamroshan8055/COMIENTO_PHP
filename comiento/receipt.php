<!DOCTYPE html>
<html>


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


<head>
    <title>Receipt</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
    margin-top: 20px;
}
.btn-orange-moon:hover {
        background: #fc4a1a; 
        background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a); 
        background: linear-gradient(to right, #f7b733, #fc4a1a);
        color: #fff;
        border-radius: 3px;
        border: 3px solid #eee;
        transition-duration: 1000ms;
        transition-property: background, transform;
    }
    .btn-orange-moon {
        background: #ff7b00; 
        border-radius: 3px;
        color: #fff;
    }
</style>


</head>
<body>


<?php
    if (!isset($_SESSION['session_login'])) {
        header("location: login-demo.php");
    }
?>

<?php
    if (isset($_SESSION['session_login'])) { 
?>

<form action="./stripe/checkout.php" method="GET">
    <?php
            $view="";
            if(!empty($_GET["id"])){
                $view .= " and id = '".$_GET["id"]."'";
            }
            

            //echo "SELECT * FROM restaurant_master WHERE 1=1 ".$view; die();
            $mysqli = new mysqli('localhost','root','','admin_master');
            $result = mysqli_query($mysqli,"SELECT * FROM plan_master WHERE 1=1 ".$view);
            while ($row = $result->fetch_assoc()) 
                        {
                    ?>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Elf Cafe</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: 1st November, 2013</em>
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Months</th>
                            <th class="text-center">Days</th>
                            <th class="text-center">Tokens</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?=$row["type"]?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?=$row["months"]?> </td>
                            <td class="col-md-1" style="text-align: center"> <?=$row["days"]?> </td>
                            <td class="col-md-1 text-center"><?=$row["tokens"]?></td>
                            <td class="col-md-1 text-center"><i class="fas fa-rupee-sign"></i><?=$row["price"]?></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong><i class="fas fa-rupee-sign"></i><?=$row["tax"]?></strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total:</strong></h4></td>
                            <td class="text-center" style="color: red;"><h4><strong><i class="fas fa-rupee-sign"><?=$row["price"]?></i></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <a href="./stripe/checkout.php?id=<?=$row["id"]?>" class="btn btn-orange-moon btn-block btn-lg">
                    Pay Now
                </a>
                <!--<button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now<span class="glyphicon glyphicon-chevron-right"></span>
                </button>
            -->
        </td>
            </div>
        </div>
    </div>
    <?php   }
            ?>
</form>

    <?php   }
            ?>

</body>
</html>

