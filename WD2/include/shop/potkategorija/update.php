<?php






$results = $con->query("UPDATE artikli_potkategorija SET 

kategorija_id='$kategorija_id',
kategorija_naziv='$kategorija_naziv',
opis='$opis',
naziv='$naziv',
menu='$menu',
potkat_prefix='$potkat_prefix',
fotografija='$potkat_fotka'



WHERE id='$id'");






?>