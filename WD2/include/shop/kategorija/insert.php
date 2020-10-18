<?php
if($naziv!="") {

   $insert_row = $con->query("INSERT INTO artikli_kategorija
(


naziv,
opis,
fotografija,
kat_prefix



) 

VALUES

(

'$naziv',
'$opis',
'$fotografija',
'$kat_prefix'


)

");

}

?>