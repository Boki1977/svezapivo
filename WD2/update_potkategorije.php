<?php
include("login_check.php");
?>

<?php
$id=$_GET['id'];
//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/potkategorije/post.php");
include ("include/potkategorije/pred_insert.php");
include ("include/potkategorije/update.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=pregled_potkategorije";

</script>