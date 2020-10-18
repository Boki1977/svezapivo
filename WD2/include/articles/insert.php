<?php
if($article_title!="") {

   $insert_row = $con->query("INSERT INTO tblnewsarticles 
(


subcategoryID,
potkategorija,
kat_prefix,
potkat_prefix,
article_title,
article_prefix,
article_description,
article_extra,
article_author,
article_type,
article_date,
status,
article_html,
expiration_date,
authorID,
meta_tagovi,
najave,
oznake,
video,
pozicija_pocetak,
pozicija_kraj,
komentari,
fotka_nova,
galerija_nova


) 

VALUES

(

'$subcategoryID',
'$potkategorija',
'$kat_prefix',
'$potkat_prefix',
'$article_title',
'$article_prefix',
'$article_description',
'$article_extra',
'$pseudonim',
'$article_type',
'$article_date',
'1',
'$article_html',
'$expiration_date',
'$k_id',
'$meta_tagovi',
'$najave',
'$oznake',
'$video',
'$pozicija_pocetak',
'$pozicija_kraj',
'$komentari',
'$fotka_nova',
'$galerija_nova'


)

");

}

?>