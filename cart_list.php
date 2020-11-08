<?php
session_start(); 
include("conection.php");

?>
<style>

.plus_click{
font-weight: bold;
color: red;
}
.minus_click{
font-weight: bold;
color: red;
}
</style>
<div class="row" id="cart_list">
						<div class="col">

							<div class="featured-boxes">
								<div class="row">
									<div class="col">
										<div class="featured-box featured-box-primary text-left mt-2">
											<div class="box-content">
												<form method="post" action="">
													<table class="shop_table cart">
														<thead>
															<tr>
																<th class="product-remove">
																	&nbsp;
																</th>
																<th class="product-thumbnail">
																	&nbsp;
																</th>
																<th class="product-name">
																	Naziv
																</th>
																<th class="product-price">
																	Cijena
																</th>
																<th class="product-quantity">
																	Količina
																</th>
																<th class="product-subtotal">
																	Ukupno
																</th>
															</tr>
														</thead>
														<tbody>
														
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
														
														
														
														?>
														
														
															<tr class="cart_table_item" id="artikl_<?php echo $id; ?>">
																<td class="product-remove">
																	<div class="remove" id="<?php echo $id; ?>" quantity="<?php echo $quantity; ?>">
																		<i class="fas fa-times"></i>
																	</div>
																</td>
																<td class="product-thumbnail">
																	<a href="<?php echo $article_link; ?>">
																		<img width="100" height="100" alt="" class="img-fluid" src="<?php echo $fotka_nova; ?>">
																	</a>
																</td>
																<td class="product-name">
																	<a href="<?php echo $article_link; ?>"><?php echo $naziv; ?></a>
																</td>
																<td class="product-price">
																	<span class="amount"><?php echo $cijena; ?> </span>
																	<input type="hidden" id="cijena_<?php echo $id; ?>" name="cijena" value="<?php echo $cijena2; ?>">
																</td>
																<td class="product-quantity">
																	
																		<div class="quantity">
																			<input type="button" class="minus mijenjanje" id="<?php echo $id; ?>" value="-">
																			<input type="text" class="input-text qty text" title="Qty" value="<?php echo $quantity; ?>" name="quantity" min="1" step="1" id="kolicina_<?php echo $id; ?>" proizvod="<?php echo $id; ?>">
																			<input type="button" class="plus mijenjanje" id="<?php echo $id; ?>" value="+">
																		</div>
																	
																</td>
																<td class="product-subtotal" >
																	<span class="amount" id="ukupno_<?php echo $id; ?>"><?php echo $ukupno; ?> </span>
																
																</td>
															</tr>
															
															<?php
															$counter++;
															}
															?>
															<tr>
																<td class="actions" colspan="6">
																	<div class="actions-continue">
																		<div value="Osvježi" name="update_cart" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase update" count="<?php echo $counter; ?>">Zaključi</div>
																	</div>
																</td>
															</tr>
															
															<script>
															$(document).ready(function(){
															$(".remove").click(function(){
															var id = $(this).attr('id');
															var quantity = $(this).attr('quantity');	
															
															$('#artikl_'+id).fadeOut();
															
															 $.ajax({
																type: 'GET',
																url: 'remove_from_cart.php?action=delete&id='+id+'&quantity='+quantity,
															  
															});
															
															});	

															$('.mijenjanje').click(function() {
															var proizvod = $(this).attr('id');
															var kolicina = $("#kolicina_"+proizvod).val();
															var cijena = $("#cijena_"+proizvod).val();
															
															var ukupno=cijena*kolicina;																														
															var ukupno=parseFloat(ukupno).toFixed(2); //12.23
															
															
																
															$('#ukupno_'+proizvod).text(ukupno);

															
															
															
															$.ajax({
															type: 'GET',
															url: 'update_cart.php?action=delete&proizvod='+proizvod+'&kolicina='+kolicina,
															  
															});
															
															});
															
															$('.plus').click(function() {
															var proizvod = $(this).attr('id');
															
															
															$('#ukupno_'+proizvod).addClass("plus_click");
															
													
													
															setTimeout(function() {
															$('#ukupno_'+proizvod).removeClass("plus_click");
														    }, 800);
															
															});
															
															
															$('.minus').click(function() {
															var proizvod = $(this).attr('id');
															
															$('#ukupno_'+proizvod).addClass("minus_click");
															
													
													
															setTimeout(function() {
															$('#ukupno_'+proizvod).removeClass("minus_click");
														    }, 800);
															
															});
															
															});
															</script>
														</tbody>
													</table>
													<table class="cart-totals">
													<tbody>
														
														<script language="javascript" type="text/javascript">

														
														
														var timeout = setInterval(CartTotal, 1000);    
														function CartTotal () {
														$('#cart_total').load('cart_total.php');
														}
														
														
														
														</script>
														<tr class="total">
															<th>
																<strong class="text-dark">Narudžba Ukupno</strong>
															</th>
															<th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
															<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
															<td>
																<strong class="text-dark"><span class="amount" id="cart_total"></span></strong>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>	
										<script src="js/views/view.shop.js"></script>
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col">
									<div class="actions-continue">
										<button type="submit" class="btn btn-primary btn-modern text-uppercase">Proceed to Checkout <i class="fas fa-angle-right ml-1"></i></button>
									</div>
								</div>
							</div>

						</div>
					</div>