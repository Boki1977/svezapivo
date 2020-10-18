<?php






$results = $con->query("UPDATE tblnewscategories SET 


category_title='$category_title',
category_fotka='$category_fotka',
category_description='$category_description',
kat_prefix='$kat_prefix'





WHERE categoryID='$id'");

?>