<?php





//----SEO naslov

function replace($str) 
{ 
    $chars = array(' '=>'-','č'=>'c','ć'=>'c','ž'=>'z','đ'=>'d','š'=>'s');  
    return str_replace(array_keys($chars), array_values($chars), mb_strtolower($str, 'UTF-8'));
} 			
$naziv_seo=replace("$naziv");			
$naziv_seo = str_replace("?", "", $naziv_seo);
$naziv_seo = str_replace(",", "", $naziv_seo);
$naziv_seo = str_replace(".", "", $naziv_seo);
$naziv_seo = str_replace("!", "", $naziv_seo);			
$naziv_seo = str_replace('"', "", $naziv_seo);		
$naziv_seo = str_replace("%", "", $naziv_seo);				
$naziv_seo = str_replace("'", "", $naziv_seo);	
$naziv_seo = str_replace("&quot;", "", $naziv_seo);	
$naziv_seo = str_replace("&#039;", "", $naziv_seo);	






?>