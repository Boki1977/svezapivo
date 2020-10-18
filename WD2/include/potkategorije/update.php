<?php






$results = $con->query("UPDATE potkategorije SET 

categoryID='$categoryID',
category_title='$category_title',
potkat_fotka='$potkat_fotka',
category_description='$category_description',
potkat_prefix='$potkat_prefix'





WHERE subcategoryID='$id'");




$results = $con->query("UPDATE tblnewsarticles SET 


potkat_prefix='$potkat_prefix'


WHERE potkategorija='$id'");



?>