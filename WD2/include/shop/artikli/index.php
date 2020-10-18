<?php

$tablica="artikl";

$lib_path="include/shop/artikli/lib/list.php";
$lib_path2="include/shop/kategorija/lib/list.php";
	
if(isset($_GET['radnja'])) 
{
$radnja = $_GET['radnja'];
    
if($radnja=="update"){
    
   
    
$aktivnost=$_POST['aktivnosti'];
    
    
    if($aktivnost=="objava"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){



	if($user_status=='4')
	{	
	

$results = $con->query("UPDATE $tablica SET status='1' WHERE id='$report_id'");	
	

	}
		 
		if($user_status=='3')
	{	
	
$results = $con->query("UPDATE $tablica SET status='1' WHERE id='$report_id' AND authorID='$k_id'");		

	}
		 
		 
		  		
   }
   }
   }





    if($aktivnost=="cekanje"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){



	if($user_status=='4')
	{	
	

$results = $con->query("UPDATE $tablica SET status='0' WHERE id='$report_id'");	
	

	}
		 
		if($user_status=='3')
	{	
	
$results = $con->query("UPDATE $tablica SET status='0' WHERE id='$report_id' AND authorID='$k_id'");		

	}
		 
		 
		  		
   }
   }
   }






}
    
}

?>


<form id="form1" name="form1" method="post" action="?page=pregled_sadrzaja&radnja=filter">
<div class="col-lg-4 col-sm-4 col-xs-4">
                                            <div class="widget flat radius-bordered">
                                                <div class="widget-header bordered-bottom bordered-pink">
                                            <span class="widget-caption">FILTER</span>
                                        </div>
                                                <div class="widget-body">
                                                    <div id="registration-form">
                                                      
                                                           
                                                            <div class="row">
                                                                
                                                                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Kategorija</label>
                                    <select id="kategorija" name="kategorija" style="width:100%;" data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan izbor">
                                                <option></option>
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM artikli_kategorija
                                                


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/shop/kategorija/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $id; ?>" id="2"/><?php echo $naziv; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                            </select>
                                </div>
                                                
                                                </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                       <div id="potkategorija_shop"></div>
                                                                    </div>
                                                                </div>
                                                                
                                                            
                                                             <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                      <button type="submit" class="btn btn-default">Pretraga</button>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            
                                                    </div>
                                                     
                                                </div>
                                              
                                            </div>  
                                        </div>                   
                    </form>













<form id="form1" name="form1" method="post" action="?page=trgovina_proizvodi&radnja=update">


 <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget-body">
                                <div class="widget-header ">
                                    <span class="widget-caption">
                                    <div class="filter-checkbox">
                      <select id="aktivnosti" name="aktivnosti" style="width:60%;">
                            <option value=""><b>Aktivnosti</b></option>                            
                            <option value="objava">Objavi</option>
                            <option value="cekanje">Stavi na čekanje</option>  
                            
                     
                            <option value="brisanje">Obriši</option> 
                   
                        </select>
                        <input type="submit" name="submit" id="submit" value="Pokreni" class="btn btn-default">
                     
                    </div>
                                    
                                    </span><a href="index.php?page=trgovina_artikl_unos" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Unos</a>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    
                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                        <thead>
                                            <tr role="row">
                                            <th>
                                                    
                                                </th>
                                          <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Naziv
                                                </th>
                                                <th>
                                                    Kategorija
                                                </th>
                                                <th>
                                                    Cijena
                                                </th>
                                                <th>
                                                    Akcijska cijena
                                                </th>
                                                <th>
                                                    Br. prodaja
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                        
                                        
                                    
                                   <?php
           
              
       if($radnja!="filter"){       
                                   
		$result = $con->query("

		SELECT * FROM $tablica 


		ORDER BY id DESC LIMIT 80

		");
		}

   if($radnja=="filter"){    
       
	   $kat_filter=$_POST['kategorija'];   
	   $potkat_filter=$_POST['potkategorija'];  
	   
		   
		$result = $con->query("

		SELECT * FROM $tablica 
		WHERE kategorija='$kat_filter'
		AND potkategorija='$potkat_filter'
		ORDER BY id DESC 

	");                

	}




 while ($obj=mysqli_fetch_object($result))
 
    {
    	$ID=($obj->id);
    	include("include/shop/artikli/lib/list.php");
    	
    	if($status > 0){
    	
    	$article_status='
    	<div class="btn-group">
         <div class="btn btn-sm btn-success"><i class="fa fa-plus-square"></i></div>                                                                            
		</div>
		';
    	
    	}
    	
    	if($status < 1){
    	
    	$article_status='
    	<div class="btn-group">
        <div class="btn btn-sm btn-danger"><i class="fa fa-plus-square"></i></div>                           
		</div>
		';
    	
    	}
    	
    	
    	if($fotka!='') {
    	$foto_status='<i class="fa fa-camera" aria-hidden="true"></i>';
    	}
    	
    	 if($fotka=='') {
    	$foto_status='';
    	}
    	
    	if($akcija!=''){
    	$cijena="<span style='color:red;text-decoration:line-through'>$cijena</span>";
            	
    	}
    	
    	
    	 if($akcija==''){
    	$cijena=$cijena;
            	
    	}
    	
    	
                $result2 = $con->query("

                 SELECT * FROM artikli_kategorija
                  WHERE id='$kategorija'
                    ");
                    
                while ($obj2=mysqli_fetch_object($result2))
 
                 {
                 $kategorija_naziv=($obj2->naziv);
                 
                 
                $result3 = $con->query("

                 SELECT * FROM artikli_potkategorija
                  WHERE id='$potkategorija'
                    ");
                    
                while ($obj3=mysqli_fetch_object($result3))
 
                 {
                 $potkategorija_naziv=($obj3->naziv);
                 }
                 
                 
                }                       
         
                $result4 = $con->query("

                 SELECT * FROM tblusers
                  WHERE userID='$authorID'
                    ");
                    
                while ($obj4=mysqli_fetch_object($result4))
 
                 {
                 $pseudonim4=($obj4->pseudonim);
                 }
                 
				 
				 //preuzimanje broja prodaja
				 
				$result5 = $con->query("
                SELECT * FROM artikli_narudzbe
                WHERE sifra='$sifra'
                ");
				 $prodaja_num=mysqli_num_rows($result5);
                 ?>				


<tr>  
 <td>  <label><input type="checkbox" name="article_id[<?php echo $ID; ?>]" id="<?php echo $ID; ?>" value="<?php echo $ID; ?>"><span class="text"></span></label></td>                     
 <td><?php echo $ID; ?> <?php echo $foto_status; ?></td>                                          
<td><?php echo $naziv; ?><P>



</td>
<td><?php echo $kategorija_naziv; ?></td>
<td><?php echo $cijena; ?></td>
<td><?php echo $akcija; ?></td>
<td class="center "><?php echo $prodaja_num; ?></td>
<td>
<a href="?page=trgovina_proizvodi_uredi&id=<?php echo $ID; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Uredi</a>

<?php echo $article_status; ?>






</td>
</tr>
     
     
                                            
<?php
//--kategorija
}//---articles
?>     
                                        
                                        
                                        
                                            
                                            
                                            
                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </form>