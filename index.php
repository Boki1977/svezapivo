<?php
session_start(); 
include("conection.php");
$page=$_GET['page'];
$cat=$_GET['cat'];

if($page=="cart"){
include("include/page/cart/cart_sesion.php");
}


?>

<!DOCTYPE html>
<html>
	<?php
	include("include/head.php");
	?>
	<body>

		<div class="body <?php if($page=="cart"){ echo "shop"; } ?>">
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
			if($page==''){
			include("include/page/naslovna/index.php");
			}
			
			
			if($page=='category'){
			include("include/page/article/category.php");
			}
			if($page=='article'){
			include("include/page/article/index.php");
			}
			if($page=='cart'){
			include("include/page/cart/index.php");
			}
			?>
							
							
							
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