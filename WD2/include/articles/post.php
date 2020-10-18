<?php
$subcategoryID=$_POST['subcategoryID'];
$potkategorija=$_POST['potkategorija'];
$article_title=$_POST['article_title'];
$article_description=$_POST['article_description'];
$article_extra=$_POST['article_extra'];
$article_author=$_POST['article_author'];
$article_type=$_POST['article_type'];
$article_date=$_POST['article_date'];
$article_html=$_POST['article_html'];
$expiration_date=$_POST['expiration_date'];
$meta_tagovi=$_POST['meta_tagovi'];
$najave=$_POST['najave'];
$oznake=$_POST['oznake'];
$video=$_POST['video'];
$pozicija_pocetak=$_POST['pozicija_pocetak'];
$pozicija_kraj=$_POST['pozicija_kraj'];
$komentari=$_POST['komentari'];
$fotka_nova=$_POST['fotka_nova'];
$galerija_nova=$_POST['galerija_nova'];
$ext_link=$_POST['ext_link'];

$potkategorija_trenutna=$_POST['potkategorija_trenutna'];


$article_title = str_replace("'", "&#039;", $article_title);
$article_description = str_replace("'", "&#039;", $article_description);
$article_extra = str_replace("'", "&#039;", $article_extra);
									
$meta_tagovi = str_replace("'", "&#039;", $meta_tagovi);
$video = str_replace("'", "&#039;", $video);
									
$article_title = str_replace('"', "&quot;", $article_title);
$article_description = str_replace('"', "&quot;", $article_description);
$article_extra = str_replace('"', "&quot;", $article_extra);
									
$meta_tagovi = str_replace('"', "&quot;", $meta_tagovi);
$video = str_replace('"', "&quot;", $video);



$article_html = mysqli_real_escape_string($con, $article_html);
									
$meta_tagovi = mysqli_real_escape_string($con, $meta_tagovi);




?>