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
$cijena2=$cijena;

}
$cijena =  number_format($cijena, 2, ',', '.');

$fotka_nova = explode("/data/",$fotka); 
list($otpadak,$fotografija_path)=$fotka_nova; 
$fotka_nova="data/$fotografija_path";  

// thumb fotke
$fotka_thumb = explode("/source/",$fotka_nova); 
list($otpadak,$fotka)=$fotka_thumb; 

$article_link="?page=article&id=$id";


$cart_link="add_to_cart.php?id=$id&action=add&radnja=redirect";



$ukupno=$quantity*$cijena;
$ukupno =  number_format($ukupno, 2, ',', '.');
$ukupno2=$quantity*$cijena;
$total = $total + $ukupno2;

$total =  number_format($total, 2, ',', '.');
?>