<?php session_start();

/**
 * Stripe - Payment Gateway integration example (Stripe Checkout)
 * ==============================================================================
 * 
 * @version v1.0: stripe_pay_checkout_demo.php 2016/10/05
 * @copyright Copyright (c) 2016, http://www.ilovephp.net
 * @author Sagar Deshmukh <sagarsdeshmukh91@gmail.com>
 * You are free to use, distribute, and modify this software
 * ==============================================================================
 *
 */

// Stripe library
require 'stripe/Stripe.php';

//database
$servername = "localhost";
$username = "root";
$password = "";
$db = "admin_master";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_SESSION['session_login'])) {

$sql = "SELECT * FROM `plan_master` where id='".$_GET["id"]."'";
          $retval = $conn->query($sql);
          $cData = $retval->fetch_assoc();
          


//$charge = "9999"

$params = array(
	"testmode"   => "on",
	"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
	"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
	"private_test_key" => "sk_test_UhFgdDurVRZULkjWMGYPfRWT",
	"public_test_key"  => "pk_test_eX6DYrZjQ3qn6HRSBVnSvnMO"
);

if ($params['testmode'] == "on") {
	Stripe::setApiKey($params['private_test_key']);
	$pubkey = $params['public_test_key'];
} else {
	Stripe::setApiKey($params['private_live_key']);
	$pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
	$amount_cents = str_replace(".","","10.52");  // Chargeble amount
	$invoiceid = "14526321";                      // Invoice ID
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;

	try {
		$charge = Stripe_Charge::create(array(		 
			  "amount" => $cData["price"],
			  "currency" => "inr",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);


$expDate = date('Y-m-d', strtotime("+".$cData["days"]." days"));
$sql = "UPDATE customer_master set plan_fk='".$cData["id"]."',purchase_date='".date("Y-m-d")."',expire_date='".$expDate."',balance='".$cData["tokens"]."' where id='".$_SESSION["session_login"]["id"]."'";
          $retval = $conn->query($sql);
          //$cData = $retval->fetch_assoc();
        

		$result = "success";
		echo "<script>alert('Your plan successfully purchased.');window.loaction.href='http://localhost/project/comiento/index.php';</script>";


	} catch(Stripe_CardError $e) {			

	$error = $e->getMessage();
		$result = "declined";

	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {

		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	echo "<BR>Payment Status : ".$result; exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Stripe Pay Checkout Demo</title>
</head>
<body>
<h1 class="bt_title" align="center">Stripe Pay Checkout Demo</h1>
<div align="center">
  <form action="" method="POST">
  	<?php $priceOfPay = $cData["price"] * 100; ?>
  <script

    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="<?=$priceOfPay?>"
    data-name="Comiento - <?php echo $cData["type"]; ?>"
    data-description="Payment"
    data-image="../images/logo-c.png"
    data-locale="auto"
    data-currency="INR"
    data-zip-code="true">
  </script>
</form>
</div>
</body>
</html>
<?php } ?>