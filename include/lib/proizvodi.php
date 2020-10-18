<?php
$id=($obj->id);
$sifra=($obj->sifra);
$kategorija=($obj->kategorija);
$potkategorija=($obj->potkategorija);
$naziv=($obj->naziv);
$opis=($obj->opis);
$kolicina=($obj->kolicina);
$tezina=($obj->tezina);
$cijena=($obj->cijena);
$akcija=($obj->akcija);
$fotka=($obj->fotka);
$galerija=($obj->galerija);
$status=($obj->status);
$pozicija=($obj->pozicija);
$naziv_seo=($obj->naziv_seo);

$opis_artikla=($obj->opis);

if($akcija!='')
{
$cijena=$akcija;
$stara_cijena=$cijena;
}
else{
$cijena=$cijena;
}


$fotka_nova = explode("/data/",$fotka); 
list($otpadak,$fotografija_path)=$fotka_nova; 
$fotka_nova="data/$fotografija_path";  

// thumb fotke
$fotka_thumb = explode("/source/",$fotka_nova); 
list($otpadak,$fotka)=$fotka_thumb; 



?>