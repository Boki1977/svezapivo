<?php
$category_title=$_POST['category_title'];
$category_description=$_POST['category_description'];
$potkat_fotka=$_POST['potkat_fotka'];
$categoryID=$_POST['categoryID'];


$category_title = str_replace("'", "&#039;", $category_title);
$category_description = str_replace("'", "&#039;", $category_description);

									
$category_title = str_replace('"', "&quot;", $category_title);
$category_description = str_replace('"', "&quot;", $category_description);




?>