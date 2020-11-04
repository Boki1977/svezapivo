
<div class="header-nav-bar header-nav-bar-top-border">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav p-0">
											<div class="header-nav header-nav-links justify-content-lg-center">
												<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-dropdown-center header-nav-main-dropdown-center-bottom header-nav-main-effect-3 header-nav-main-sub-effect-1">
													<nav class="collapse">
														<ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
														
														
															
															<li class="dropdown">
																<a class="dropdown-item dropdown-toggle" href="#">
																	Naslovna    <i class="fas fa-arrow-down" style="margin-left:5px; color:#eaeaea;"></i>
																</a>
																
															</li>
															
															<?php

															$result = $con->query("

															SELECT * FROM artikli_kategorija 
															WHERE menu='1'
															ORDER BY sort ASC

															");
															while ($obj=mysqli_fetch_object($result))
													 
															{
																include("include/lib/kategorija_shop.php");
															?>
															<li class="dropdown">
																<a class="dropdown-item dropdown-toggle" href="#">
																	<?php echo $naziv; ?> <i class="fas fa-arrow-down" style="margin-left:5px;color:#eaeaea;"></i>
																</a>
																<ul class="dropdown-menu">
																
															<?php
															$result2 = $con->query("

															SELECT * FROM  artikli_potkategorija 
															WHERE kategorija_id='$id'
															ORDER BY naziv ASC

															");
															while ($obj2=mysqli_fetch_object($result2))
													 
															{
																include("include/lib/potkategorija_shop_nav.php");
															?>															
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="<?php echo $potkat_link; ?>"><?php echo $naziv_nav; ?></a>																		
																	</li>
																	
															<?php
															}
															?>
																	
																	
																</ul>
															</li>
															
															<?php
															}
															?>
															
															<li class="dropdown">
																<a class="dropdown-item dropdown-toggle" href="#">
																	Akcije <i class="fas fa-arrow-down" style="margin-left:5px;color:#eaeaea;"></i>
																</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Headers</a>
																		
																	</li>
																	
																</ul>
															</li>
															
															<li class="dropdown">
																<a class="dropdown-item dropdown-toggle" href="#">
																	Info <i class="fas fa-arrow-down" style="margin-left:5px;color:#eaeaea;"></i>
																</a>
																<ul class="dropdown-menu">
																	<li class="dropdown-submenu">
																		<a class="dropdown-item" href="#">Headers</a>
																		
																	</li>
																	
																</ul>
															</li>
															
															
															<script language="javascript" type="text/javascript">

														var timeout = setInterval(reloadChat, 1000);    
														function reloadChat () {

															 $('.cart-info').load('cart_count.php');
														}
														
														var timeout = setInterval(reloadChat2, 1000);    
														function reloadChat2 () {
														$('#cart_up_list').load('cart_up_list.php');
														}
														
														
														
														</script>
														<div class="header-nav-features">
														<div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex ml-2">
														<a href="cart.php" class="header-nav-features-toggle" id="cart_count" style="margin-top:15px; margin-left: -5px;">
														<img src="img/icons/icon-cart-big.svg" height="34" alt="" class="header-nav-top-icon-img cart" id="kosarica">
														<span class="cart-info"></span>
														</a>
															<div class="header-nav-features-dropdown" id="headerTopCartDropdown">
															<div id="cart_up_list"></div>
															<div class="actions">		
															<a class="btn btn-primary" href="index.php?page=cart">Košarica</a>
															</div>
															
														</div>									
														</div>
														</div>
															
															
														</ul>
													</nav>
												</div>
												
												<div class="d-block d-sm-none"><img alt="Porto" width="250" height="60" data-sticky-width="250" data-sticky-height="60" src="data/source/logo/logo.png"></div>
												<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
													<i class="fas fa-bars"></i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
		