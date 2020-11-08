<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php session_start(); ?>
<?php
$product_id = $_GET['id'];	 //the product id from the URL 
$action= $_GET['action']; //the action from the URL 
$radnja=$_GET['radnja'];


if($action=="add"){
$_SESSION['cart'][$product_id]++; //add one to the quantity of the product with id $product_id 
$counter = 0;
foreach($_SESSION['cart'] as $product_id => $quantity) {
	$counter++;
	
	$sum+=$quantity;
}

}

if($action=="delete"){
	$_SESSION['cart'][$product_id]-=$komada2; //remove one from the quantity of the product with id $product_id 
			
			if($_SESSION['cart'][$product_id] == 0) unset($_SESSION['cart'][$product_id]); //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items. 
		if($_SESSION['cart'][$product_id] < 0) unset($_SESSION['cart'][$product_id]); //if the quantity is zero, remove it completely (using the 'unset' function) - otherwise is will show zero, then -1, -2 etc when the user keeps removing items.
		
		
		$_SESSION["total_iznos"] = "0,00";
}



$_SESSION["broj_komada"] = $counter;
$_SESSION["quantity"] = $sum;

