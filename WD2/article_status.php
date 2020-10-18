<!DOCTYPE html>
<html>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$path="http://localhost/035-novi";
  $danas_datum = date("Y-m-d", strtotime("+0 day"));
  $tjedan_datum = date("Y-m-d", strtotime("-7 day"));
  $mjesec_datum = date("Y-m-d", strtotime("-30 day"));
  
  $danas = date("Y-m-d H:i:s", strtotime("+7 hour"));
 
  

$user="portalhr_baza"; 
$pasword="Portal_hrbaza15"; 
 $database="portalhr_baza";


$con=mysqli_connect("localhost",$user,$pasword,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<body>
<?php
$id=$_POST['id'];
$status_article=$_POST['status_article'];

$results = $con->query("UPDATE tblnewsarticles SET status='$status_article' WHERE articleID='$id'");

?>



                                      

</body>

    


    
    
</html>