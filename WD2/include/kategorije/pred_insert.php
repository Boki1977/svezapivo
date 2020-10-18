<?php




//----SEO naslov

function replace($str) 
{ 
    $chars = array(' '=>'-','č'=>'c','ć'=>'c','ž'=>'z','đ'=>'d','š'=>'s');  
    return str_replace(array_keys($chars), array_values($chars), mb_strtolower($str, 'UTF-8'));
} 			
$kat_prefix=replace("$category_title");			
$kat_prefix = str_replace("?", "", $kat_prefix);
$kat_prefix = str_replace(",", "", $kat_prefix);
$kat_prefix = str_replace(".", "", $kat_prefix);
$kat_prefix = str_replace("!", "", $kat_prefix);			
$kat_prefix = str_replace('"', "", $kat_prefix);		
$kat_prefix = str_replace("%", "", $kat_prefix);				
$kat_prefix = str_replace("'", "", $kat_prefix);	
$kat_prefix = str_replace("&quot;", "", $kat_prefix);	
$kat_prefix = str_replace("&#039;", "", $kat_prefix);	






?>