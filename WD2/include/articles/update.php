<?php


if($potkategorija==""){
$potkategorija=$potkategorija_trenutna;
}

if($potkategorija!=""){
$potkategorija=$potkategorija;
}



$results = $con->query("UPDATE tblnewsarticles SET 


subcategoryID='$subcategoryID',
potkategorija='$potkategorija',
kat_prefix='$kat_prefix',
potkat_prefix='$potkat_prefix',
article_title='$article_title',
article_prefix='$article_prefix',
article_description='$article_description',
article_extra='$article_extra',
article_author='$pseudonim',
article_type='$article_type',
article_date='$article_date',
article_html='$article_html',
expiration_date='$expiration_date',
authorID='$authorID',
meta_tagovi='$meta_tagovi',
najave='$najave',
oznake='$oznake',
video='$video',
pozicija_pocetak='$pozicija_pocetak',
pozicija_kraj='$pozicija_kraj',
komentari='$komentari',
fotka_nova='$fotka_nova',
galerija_nova='$galerija_nova',
ext_link='$ext_link'




WHERE articleID='$id'");

?>