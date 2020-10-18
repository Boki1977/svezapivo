<?php
$kategorija_id=$_POST['kategorija_id'];
$opis=$_POST['opis'];
$naziv=$_POST['naziv'];
$potkat_fotka=$_POST['potkat_fotka'];




$naziv = str_replace("'", "&#039;", $naziv);
$naziv = str_replace("'", "&#039;", $naziv);

									
$naziv = str_replace('"', "&quot;", $naziv);
$naziv = str_replace('"', "&quot;", $naziv);




?>