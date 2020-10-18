<?php
include("login_check.php");
?>

<?php

//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/kategorije/post.php");
include ("include/kategorije/pred_insert.php");
include ("include/kategorije/insert.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=pregled_kategorije";

</script>