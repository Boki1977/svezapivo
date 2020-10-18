<?php
if($category_title!="") {

   $insert_row = $con->query("INSERT INTO tblnewscategories
(


category_title,
category_fotka,
category_description,
kat_prefix


) 

VALUES

(

'$category_title',
'$category_fotka',
'$category_description',
'$kat_prefix'


)

");

}

?>