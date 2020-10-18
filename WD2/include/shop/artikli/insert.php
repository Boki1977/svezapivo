<?php
if($naziv!="") {

   $insert_row = $con->query("INSERT INTO artikl 
(


sifra,
kategorija,
potkategorija,
naziv,
opis,
kolicina,
tezina,
cijena,
fotka,
galerija,
status,
pozicija,
naziv_seo


) 

VALUES

(

'$sifra',
'$kategorija',
'$potkategorija',
'$naziv',
'$opis',
'$kolicina',
'$tezina',
'$cijena',
'$fotka',
'$galerija',
'0',
'$pozicija',
'$naziv_seo'


)

");

}

?>