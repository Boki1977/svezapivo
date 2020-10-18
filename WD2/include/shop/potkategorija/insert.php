<?php
if($naziv!="") {

   $insert_row = $con->query("INSERT INTO artikli_potkategorija
(

kategorija_id,
opis,
naziv,
potkat_prefix,
fotografija



) 

VALUES

(
'$kategorija_id',
'$opis',
'$naziv',
'$potkat_prefix',
'$potkat_fotka'


)

");

}

?>