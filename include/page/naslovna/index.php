<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var strCategory = "35";
var passURL = "add_to_cart.php?id=77&action=add";
$(document).ready(function() {
	
	function load_data(query) {
$.ajax({
    url:passURL,
    method:"POST",
    data:{query:query},
    success:function(data) {
        $('#add').html(data);
    }
});
	}
});
</script>
			


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
				<section class="section section-default">
					<div class="container">
						<div class="row">
							<div class="col">
								<h4 class="mb-0">Color Light Section</h4>
								<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros ipsum, facilisis eget scelerisque non, fermentum at tellus.</p>
							</div>
						</div>
					</div>
				</section>

					<div style="width:75%; margin-left: 20%;">
					
							<img src="data/source/icons/piktograms.png" width="80%">
						
					</div>
				
