<?php






$results = $con->query("UPDATE artikli_kategorija SET 


naziv='$naziv',
opis='$opis',
fotografija='$fotografija',
kat_prefix='$kat_prefix'






WHERE id='$id'");

?>