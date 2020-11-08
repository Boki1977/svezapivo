<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php session_start(); ?>
<?php

$broj=$_GET['kolicina'];
$proizvod=$_GET['proizvod'];

unset($_SESSION['cart'][$proizvod]);

$_SESSION['cart'][$proizvod]=$broj;

$counter = 0;
foreach($_SESSION['cart'] as $product_id => $quantity) {
	$counter++;
	
	$sum+=$quantity;
}

$_SESSION["quantity"] = $sum;
?>
<pre>
<?php

echo $_SESSION['cart'][$proizvod];


print_r ($_SESSION['cart']);
?>
</pre>