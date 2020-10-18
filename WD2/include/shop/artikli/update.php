<?php


if($potkategorija==""){
$potkategorija=$potkategorija_trenutna;
}

if($potkategorija!=""){
$potkategorija=$potkategorija;
}



$results = $con->query("UPDATE artikl SET 


sifra='$sifra',
kategorija='$kategorija',
potkategorija='$potkategorija',
naziv='$naziv',
opis='$opis',
kolicina='$kolicina',
tezina='$tezina',
cijena='$cijena',
akcija='$akcija',
fotka='$fotka',
galerija='$galerija',
pozicija='$pozicija',
naziv_seo='$naziv_seo'




WHERE id='$id'");

?>