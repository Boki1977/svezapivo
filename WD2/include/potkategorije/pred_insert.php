<?php




//----SEO naslov

function replace($str) 
{ 
    $chars = array(' '=>'-','č'=>'c','ć'=>'c','ž'=>'z','đ'=>'d','š'=>'s');  
    return str_replace(array_keys($chars), array_values($chars), mb_strtolower($str, 'UTF-8'));
} 			
$potkat_prefix=replace("$category_title");			
$potkat_prefix = str_replace("?", "", $potkat_prefix);
$potkat_prefix = str_replace(",", "", $potkat_prefix);
$potkat_prefix = str_replace(".", "", $potkat_prefix);
$potkat_prefix = str_replace("!", "", $potkat_prefix);			
$potkat_prefix = str_replace('"', "", $potkat_prefix);		
$potkat_prefix = str_replace("%", "", $potkat_prefix);				
$potkat_prefix = str_replace("'", "", $potkat_prefix);	
$potkat_prefix = str_replace("&quot;", "", $potkat_prefix);	
$potkat_prefix = str_replace("&#039;", "", $potkat_prefix);	






?>