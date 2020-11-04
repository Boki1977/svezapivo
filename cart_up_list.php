	<?php
	include("conection.php");
	 session_start(); 
	 if($_SESSION['cart']) {
	 ?>
	
	
	
	<div id="cart_up_list">
	
	<?php
	$counter = 0;
	
	
	foreach($_SESSION['cart'] as $product_id => $quantity) 
	{
	
	$result = $con->query("
	SELECT * FROM artikl WHERE id='$product_id' AND kolicina >'0'
	");
		

	while ($obj=mysqli_fetch_object($result))
    {	
	include("include/lib/proizvodi.php");
	}
	if($counter==2) { break; }
	
	
	if($_SESSION["broj_komada"] >2)
	{
		$more_info="<span style='color: red; font-size:11px;'>Postoji još proizvoda u košarici...</span>";
	}
	?>
	<ol class="mini-products-list">
		<li class="item">
			<a href="#" title="<?php echo $naziv; ?>" class="product-image"><img src="<?php echo $fotka_nova; ?>" alt="<?php echo $naziv; ?>"></a>
			<div class="product-details">
				<p class="product-name">
					<a href="#"><?php echo $naziv; ?> </a>
				</p>
				<p class="qty-price">
					<span class="price"><?php echo $quantity; ?> x <?php echo $cijena; ?>Kn</span>
				</p>
				
			</div>
		</li>
				
	</ol>
	
	<?php
	$counter++;
	}
	
	?>
	
	<?php echo $more_info; ?>
	<div class="totals">
		<span class="label">Total:</span>
		<span class="price-total"><span class="price"><?php echo $total; ?></span></span>
	</div>
	
	
	</div>

	<?php
	 }
	 ?>