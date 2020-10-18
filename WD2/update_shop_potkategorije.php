<?php
include("login_check.php");
?>

<?php
$id=$_GET['id'];
//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/shop/potkategorija/post.php");
include ("include/shop/potkategorija/pred_insert.php");
include ("include/shop/potkategorija/update.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=trgovina_potkategorija";

</script>