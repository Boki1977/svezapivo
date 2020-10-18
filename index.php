<?php
include("conection.php");
?>

<!DOCTYPE html>
<html>
	<?php
	include("include/head.php");
	?>
	<body>

		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<?php
					include("include/top_bar.php");
					?>
					<?php
					include("include/header.php");
					?>
					<?php
					include("include/nav.php");
					?>
				</div>
			</header>


			<?php
			include("include/top_info.php");
			?>

			<div role="main" class="main">
				
			<?php
			include("include/page/naslovna/visual_box.php");
			?>
				
			<?php
			include("include/page/naslovna/cat_middle.php");
			?>
				
			<div class="container main shop py-4" style="margin-top:2%;">	
			<div class="col-lg-12">

							
			<?php
			include("include/page/naslovna/article_list.php");
			?>						
						
								</div>
							
							
							
							
							
							
				
							
							</div>
							
							
							
						</div>	
				
			</div>	
			

			<?php
			include("include/footer.php");
			?>
		</div>
		<?php
		include("include/footer_js.php");
		?>

	</body>
</html>