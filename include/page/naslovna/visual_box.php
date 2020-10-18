<div class="container">
			<div class="row">
			<?php
			// box1
			$result = $con->query("

			SELECT * FROM tblnewsarticles 
			WHERE potkategorija='1'
			AND status='2' ORDER BY articleID DESC limit 1

			");
			while ($obj=mysqli_fetch_object($result))
	 
			{
				include("include/lib/article.php");
				$fotka_nova1=($obj->fotka_nova);
			}
			?>
			<div class="col-md-8"><img src="<?php echo $fotka_nova1; ?>" class="img-fluid"></div>
			
			<?php
			// box1
			$result = $con->query("

			SELECT * FROM tblnewsarticles 
			WHERE potkategorija='2'
			AND status='2' ORDER BY articleID DESC limit 1

			");
			while ($obj=mysqli_fetch_object($result))
	 
			{
				include("include/lib/article.php");
				$fotka_nova2=($obj->fotka_nova);
			}
			?>
			
			<div class="col-md-4"><img src="<?php echo $fotka_nova2; ?>" class="img-fluid"></div>
			</div>
			
			</div>
				
			
			<div class="container" style="margin-top:2%;">
			<div class="row">
			<?php
			// box1
			$result = $con->query("

			SELECT * FROM tblnewsarticles 
			WHERE potkategorija='3'
			AND status='2' ORDER BY articleID DESC limit 1

			");
			while ($obj=mysqli_fetch_object($result))
	 
			{
				include("include/lib/article.php");
				$fotka_nova3=($obj->fotka_nova);
			}
			?>
			<div class="col-md-4"><img src="<?php echo $fotka_nova3; ?>" class="img-fluid"></div>
			
			<?php
			// box1
			$result = $con->query("

			SELECT * FROM tblnewsarticles 
			WHERE potkategorija='4'
			AND status='2' ORDER BY articleID DESC limit 1

			");
			while ($obj=mysqli_fetch_object($result))
	 
			{
				include("include/lib/article.php");
				$fotka_nova4=($obj->fotka_nova);
			}
			?>
			<div class="col-md-4"><img src="<?php echo $fotka_nova4; ?>" class="img-fluid"></div>
			
			<?php
			// box1
			$result = $con->query("

			SELECT * FROM tblnewsarticles 
			WHERE potkategorija='5'
			AND status='2' ORDER BY articleID DESC limit 1

			");
			while ($obj=mysqli_fetch_object($result))
	 
			{
				include("include/lib/article.php");
				$fotka_nova5=($obj->fotka_nova);
			}
			?>
			<div class="col-md-4"><img src="<?php echo $fotka_nova5; ?>" class="img-fluid"></div>
			</div>
			
			</div>	