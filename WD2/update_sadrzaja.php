<?php
include("login_check.php");
?>

<?php
$id=$_GET['id'];
//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/articles/post.php");
include ("include/articles/pred_insert.php");
include ("include/articles/update.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=pregled_sadrzaja";

</script>