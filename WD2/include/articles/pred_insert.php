<?php

//---definiranje kategorije
 $result = $con->query("
SELECT * FROM tblnewscategories 
WHERE categoryID='$subcategoryID'
");

  while ($obj=mysqli_fetch_object($result))

{
$kat_prefix=($obj->kat_prefix);
}



if($potkategorija!=""){




//---definiranje potkategorije
 $result = $con->query("
SELECT * FROM potkategorije 
WHERE subcategoryID='$potkategorija'
");

  while ($obj=mysqli_fetch_object($result))

{
$potkat_prefix=($obj->potkat_prefix);
}

}

if($potkategorija==""){




//---definiranje potkategorije
 $result = $con->query("
SELECT * FROM potkategorije 
WHERE subcategoryID='$potkategorija_trenutna'
");

  while ($obj=mysqli_fetch_object($result))

{
$potkat_prefix=($obj->potkat_prefix);
}

}



//----SEO naslov

function replace($str) 
{ 
    $chars = array(' '=>'-','č'=>'c','ć'=>'c','ž'=>'z','đ'=>'d','š'=>'s');  
    return str_replace(array_keys($chars), array_values($chars), mb_strtolower($str, 'UTF-8'));
} 			
$article_prefix=replace("$article_title");			
$article_prefix = str_replace("?", "", $article_prefix);
$article_prefix = str_replace(",", "", $article_prefix);
$article_prefix = str_replace(".", "", $article_prefix);
$article_prefix = str_replace("!", "", $article_prefix);			
$article_prefix = str_replace('"', "", $article_prefix);		
$article_prefix = str_replace("%", "", $article_prefix);				
$article_prefix = str_replace("'", "", $article_prefix);	
$article_prefix = str_replace("&quot;", "", $article_prefix);	
$article_prefix = str_replace("&#039;", "", $article_prefix);	






?>