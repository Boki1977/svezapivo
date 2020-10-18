<?php
if($category_title!="") {

   $insert_row = $con->query("INSERT INTO potkategorije
(

categoryID,
category_title,
potkat_fotka,
category_description,
potkat_prefix


) 

VALUES

(
'$categoryID',
'$category_title',
'$potkat_fotka',
'$category_description',
'$potkat_prefix'


)

");

}

?>