<?php
include("login_check.php");
?>


<?php
$page=$_GET['page'];


?>



<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include("include/head.php");
?>
<!-- /Head -->
<!-- Body -->
<body>
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
   <?php
   include("include/top_bar.php");
   ?>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">

            <!-- Page Sidebar -->
           <?php
           include("include/left.php");
           ?>
            <!-- /Page Sidebar -->
         
            <!-- Page Content -->
            <div class="page-content">
            <?php
            include("include/title.php");
            ?>
              
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <?php
                   
                    if($page=="unos_sadrzaja"){
                    include("include/articles/unos.php");
                    }
                    if($page=="pregled_sadrzaja"){
                    include("include/articles/index.php");
                    }
                    if($page==""){
                    include("include/articles/index.php");
                    }
                  if($page=="uredi_sadrzaj"){
                    include("include/articles/uredi.php");
                    }
                    
                    if($page=="pregled_kategorije"){
                    include("include/kategorije/index.php");
                    }
                     if($page=="unos_kategorije"){
                    include("include/kategorije/unos.php");
                    }
                    if($page=="uredi_kategoriju"){
                    include("include/kategorije/uredi.php");
                    }
                    

                    if($page=="pregled_potkategorije"){
                    include("include/potkategorije/index.php");
                    }
                     if($page=="unos_potkategorije"){
                    include("include/potkategorije/unos.php");
                    }
                    if($page=="uredi_potkategoriju"){
                    include("include/potkategorije/uredi.php");
                    }

                     
                     // trgovina
                     
                     if($page=="trgovina_proizvodi"){
                    include("include/shop/artikli/index.php");
                    }
                    
                    if($page=="trgovina_artikl_unos"){
                    include("include/shop/artikli/unos.php");
                    }

                   if($page=="trgovina_proizvodi_uredi"){
                    include("include/shop/artikli/uredi.php");
                    }













                   if($page=="trgovina_kategorija"){
                    include("include/shop/kategorija/index.php");
                    }

                    if($page=="trgovina_kategorija_unos"){
                    include("include/shop/kategorija/unos.php");
                    }
                    if($page=="trgovina_kategorija_uredi"){
                    include("include/shop/kategorija/uredi.php");
                    }
                    

                    if($page=="trgovina_potkategorija"){
                    include("include/shop/potkategorija/index.php");
                    }

                    if($page=="trgovina_potkategorija_unos"){
                    include("include/shop/potkategorija/unos.php");
                    }

                    if($page=="uredi_shop_potkategoriju"){
                    include("include/shop/potkategorija/uredi.php");
                    }





                    ?>
                    
                  

                    
                    
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>

  <?php
  include("include/footer_scripts.php");
  ?>
  

</body>

</html>
