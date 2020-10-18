<?php
include("login_check.php");
?>

<?php
$id=$_GET['id'];
//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/kategorije/post.php");
include ("include/kategorije/pred_insert.php");
include ("include/kategorije/update.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=pregled_kategorije";

</script>