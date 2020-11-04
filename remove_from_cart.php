<?php
session_start(); 
$product_id = $_GET['id'];	 //the product id from the URL 
$kolicina = $_GET['quantity'];	 //the product id from the URL 
unset($_SESSION['cart'][$product_id]);

$_SESSION["quantity"] = $_SESSION["quantity"]-$kolicina;
?>
