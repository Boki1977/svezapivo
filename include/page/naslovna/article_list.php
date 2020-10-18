<div class="container">

<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
						
		<?php

		$result = $con->query("

		SELECT * FROM artikl 
		WHERE status='1'
		ORDER BY RAND() LIMIT 12

		");
		while ($obj=mysqli_fetch_object($result))
 
		{
			include("include/lib/proizvodi.php");
		?>
						
							<div class="col-12 col-sm-6 col-lg-3 product">
							<?php
							if($akcija!='')
							{
							?>
								<a href="#">
									<span class="onsale">Sale!</span>
								</a>
							<?php
							}
							?>							
								<span class="product-thumb-info border-0">
									<a href="#" class="add-to-cart-product bg-color-primary">
										<span class="text-uppercase text-1"><i class="fas fa-cart-plus"></i> Dodaj u košaricu</span>
									</a>
									<a href="#">
										<span class="product-thumb-info-image">
											<img alt="" height="250"src="<?php echo $fotka_nova; ?>">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 price_bg" style="min-height:30; max-height:80px;">
										<a href="#">
											<h4 class="text-4 text-primary" style="padding-left:5px;"><?php echo $naziv; ?></h4>
											<span class="price">
											<?php
											if($stara_cijena!='')
											{
											?>
												<del><span class="amount" style="padding-left:5px;"><?php echo $stara_cijena; ?>Kn</span></del>
											<?php
											}
											?>											
												<ins><span class="amount text-dark font-weight-semibold" style="padding-left:5px;"><?php echo $cijena; ?> Kn</span></ins>
											</span>
										</a>
									</span>
								</span>
							</div>
		<?php
		}
		?>
							
						</div>
						
					</div>
					
					