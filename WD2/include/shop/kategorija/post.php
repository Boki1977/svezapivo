<?php
$naziv=$_POST['naziv'];
$opis=$_POST['opis'];
$fotografija=$_POST['fotografija'];
$menu=$_POST['menu'];



$naziv = str_replace("'", "&#039;", $naziv);
$opis = str_replace("'", "&#039;", $opis);


$naziv = str_replace('"', "&quot;", $naziv);
$opis = str_replace('"', "&quot;", $opis);




?>