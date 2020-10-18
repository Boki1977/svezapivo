<?php
include("login_check.php");
?>

<?php

//--ako je unos sadržaja izvršava post, insert i u headu redirekciju na pregled
include ("include/potkategorije/post.php");
include ("include/potkategorije/pred_insert.php");
include ("include/potkategorije/insert.php");

?>
          <script type="text/javascript">

document.location = "index.php?page=pregled_potkategorije";

</script>