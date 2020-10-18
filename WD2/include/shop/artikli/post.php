<?php

$sifra=$_POST['sifra'];
$kategorija=$_POST['kategorija'];
$potkategorija=$_POST['potkategorija'];
$naziv=$_POST['naziv'];
$opis=$_POST['opis'];
$kolicina=$_POST['kolicina'];
$tezina=$_POST['tezina'];
$cijena=$_POST['cijena'];
$akcija=$_POST['akcija'];
$fotka=$_POST['fotka'];
$galerija=$_POST['galerija'];
$status=$_POST['status'];
$pozicija=$_POST['pozicija'];


$potkategorija_trenutna=$_POST['potkategorija_trenutna'];


$naziv = str_replace("'", "&#039;", $naziv);
$opis = str_replace("'", "&#039;", $opis);

									

									
$naziv = str_replace('"', "&quot;", $naziv);
$opis = str_replace('"', "&quot;", $opis);

									




?>