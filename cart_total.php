<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php session_start(); ?>
<?php include("conection.php"); ?>
<?php



foreach($_SESSION['cart'] as $product_id => $quantity) {

	
	$result = $con->query("
	SELECT * FROM artikl WHERE id='$product_id' AND kolicina >'0'
	");
		

	while ($obj=mysqli_fetch_object($result))
    {	
	include("include/lib/proizvodi.php");
	}
}


$_SESSION["cart_total"] = $total;
?>
<span id="cart_total"><?php echo $_SESSION["cart_total"]; ?> Kn</span>