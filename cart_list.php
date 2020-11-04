<?php
session_start(); 
include("conection.php");

?>

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
																	Product
																</th>
																<th class="product-price">
																	Price
																</th>
																<th class="product-quantity">
																	Quantity
																</th>
																<th class="product-subtotal">
																	Total
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
																	<span class="amount"><?php echo $cijena; ?> Kn</span>
																</td>
																<td class="product-quantity">
																	
																		<div class="quantity">
																			<input type="button" class="minus" value="-">
																			<input type="text" class="input-text qty text" title="Qty" value="<?php echo $quantity; ?>" name="quantity" min="1" step="1" id="quantyty_[<?php echo $id; ?>">
																			<input type="button" class="plus" value="+">
																		</div>
																	
																</td>
																<td class="product-subtotal">
																	<span class="amount"><?php echo $ukupno; ?> Kn</span>
																</td>
															</tr>
															
															<?php
															}
															?>
															<tr>
																<td class="actions" colspan="6">
																	<div class="actions-continue">
																		<div value="Osvježi" name="update_cart" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase update">Osvježi</div>
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


															
															});
															</script>
														</tbody>
													</table>
												</form>
											</div>
										</div>	
										<script src="js/views/view.shop.js"></script>
									</div>
								</div>
							</div>

							<div class="featured-boxes">
								<div class="row">
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary text-left mt-3 mt-lg-4">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Calculate Shipping</h4>

												<form action="/" id="frmCalculateShipping" method="post">
													<div class="form-row">
														<div class="form-group col">
															<label class="font-weight-bold text-dark">Country</label>
															<select class="form-control">
																<option value="">Select a country</option>
															</select>
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark">State</label>
															<input type="text" value="" class="form-control">
														</div>
														<div class="form-group col-lg-6">
															<label class="font-weight-bold text-dark">Zip Code</label>
															<input type="text" value="" class="form-control">
														</div>
													</div>
													<div class="form-row">
														<div class="form-group col">
															<input type="submit" value="Update Totals" class="btn btn-xl btn-light pr-4 pl-4 text-2 font-weight-semibold text-uppercase" data-loading-text="Loading...">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="featured-box featured-box-primary text-left mt-3 mt-lg-4">
											<div class="box-content">
												<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Cart Totals</h4>
												<table class="cart-totals">
													<tbody>
														<tr class="cart-subtotal">
															<th>
																<strong class="text-dark">Cart Subtotal</strong>
															</th>
															<td>
																<strong class="text-dark"><span class="amount">$431</span></strong>
															</td>
														</tr>
														<tr class="shipping">
															<th>
																Shipping
															</th>
															<td>
																Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
															</td>
														</tr>
														<tr class="total">
															<th>
																<strong class="text-dark">Order Total</strong>
															</th>
															<td>
																<strong class="text-dark"><span class="amount">$431</span></strong>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
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