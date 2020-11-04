<?php
(int)$id = ( isset( $_GET["id"] ) ? $_GET["id"] : 0 );

$result = $con->query("

SELECT * FROM artikl 
WHERE status='1'
AND id='$id'

");
while ($obj=mysqli_fetch_object($result))

{
	include("include/lib/proizvodi.php");
}
?>

<div class="container">

					<div class="row">
						<div class="col-lg-6">

							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1}">
								<div>
								
									<img alt="" class="rightImg" src="<?php echo $fotka_nova; ?>">
								</div>
								<div>
									<img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
								</div>
								<div>
									<img alt="" class="img-fluid" src="img/products/product-grey-7-3.jpg">
								</div>
							</div>

						</div>

						<div class="col-lg-6">

							<div class="summary entry-summary">

								<h1 class="mb-0 font-weight-bold text-7"><?php echo $naziv; ?></h1>


								<p class="price">
								<h3 class="font-weight-normal">Cijena <?php echo $cijena; ?></h3>
									
								</p>

								
								
									<div class="quantity quantity-lg">
										<input type="button" class="minus" value="-">
										<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
										<input type="button" class="plus" value="+">
									</div>
									<button  class="btn btn-primary btn-modern text-uppercase add" style="margin-top:2%;" name='pero' id="<?php echo $id; ?>">Add to cart</button>
								

								<div class="product-meta">
									<span class="posted-in">Categories: <a rel="tag" href="#">Accessories</a>, <a rel="tag" href="#">Bags</a>.</span>
								</div>

							</div>


						</div>
					</div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					

					<div class="row">
						<div class="col">
							<div class="tabs tabs-product mb-2">
								<ul class="nav nav-tabs">
									<li class="nav-item active"><a class="nav-link py-3 px-4" href="#productDescription" data-toggle="tab">Description</a></li>
									
								</ul>
								<div class="tab-content p-0">
									<div class="tab-pane p-4 active" id="productDescription">
									<?php echo $opis; ?>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<hr class="solid my-5">

							<h4 class="mb-3">Related <strong>Products</strong></h4>
							<div class="masonry-loader masonry-loader-showing">
								<div class="row products product-thumb-info-list mt-3" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
									<div class="col-12 col-sm-6 col-lg-3 product">
										<span class="product-thumb-info border-0">
											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
												<span class="text-uppercase text-1">Add to Cart</span>
											</a>
											<a href="shop-product-sidebar-left.html">
												<span class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="img/products/product-grey-1.jpg">
												</span>
											</a>
											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
												<a href="shop-product-sidebar-left.html">
													<h4 class="text-4 text-primary">Photo Camera</h4>
													<span class="price">
														<del><span class="amount">$325</span></del>
														<ins><span class="amount text-dark font-weight-semibold">$299</span></ins>
													</span>
												</a>
											</span>
										</span>
									</div>
									<div class="col-12 col-sm-6 col-lg-3 product">
										<span class="product-thumb-info border-0">
											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
												<span class="text-uppercase text-1">Add to Cart</span>
											</a>
											<a href="shop-product-sidebar-left.html">
												<span class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="img/products/product-grey-2.jpg">
												</span>
											</a>
											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
												<a href="shop-product-sidebar-left.html">
													<h4 class="text-4 text-primary">Golf Bag</h4>
													<span class="price">
														<span class="amount text-dark font-weight-semibold">$72</span>
													</span>
												</a>
											</span>
										</span>
									</div>
									<div class="col-12 col-sm-6 col-lg-3 product">
										<span class="product-thumb-info border-0">
											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
												<span class="text-uppercase text-1">Add to Cart</span>
											</a>
											<a href="shop-product-sidebar-left.html">
												<span class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="img/products/product-grey-3.jpg">
												</span>
											</a>
											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
												<a href="shop-product-sidebar-left.html">
													<h4 class="text-4 text-primary">Workout</h4>
													<span class="price">
														<span class="amount text-dark font-weight-semibold">$60</span>
													</span>
												</a>
											</span>
										</span>
									</div>
									<div class="col-12 col-sm-6 col-lg-3 product">
										<span class="product-thumb-info border-0">
											<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
												<span class="text-uppercase text-1">Add to Cart</span>
											</a>
											<a href="shop-product-sidebar-left.html">
												<span class="product-thumb-info-image">
													<img alt="" class="img-fluid" src="img/products/product-grey-4.jpg">
												</span>
											</a>
											<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
												<a href="shop-product-sidebar-left.html">
													<h4 class="text-4 text-primary">Luxury bag</h4>
													<span class="price">
														<span class="amount text-dark font-weight-semibold">$199</span>
													</span>
												</a>
											</span>
										</span>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>