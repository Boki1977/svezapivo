<?php

	
if(isset($_GET['radnja'])) 
{
$radnja = $_GET['radnja'];
    
if($radnja=="update"){
    
   
    
$aktivnost=$_POST['aktivnosti'];
    
    
    if($aktivnost=="objava"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){

	

$results = $con->query("UPDATE artikli_potkategorija SET menu='1' WHERE id='$report_id'");	
	



		 
		 
		  		
   }
   }
   }





    if($aktivnost=="cekanje"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){




	

$results = $con->query("UPDATE artikli_potkategorija SET menu='0' WHERE id='$report_id'");	
	


 
		 
		  		
   }
   }
   }






}
    
}

?>


<form id="form1" name="form1" method="post" action="?page=trgovina_potkategorija&radnja=update">


 <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget-body">
                                <div class="widget-header ">
                                    <span class="widget-caption">
                                    
                                    <div class="filter-checkbox">
                      <select id="aktivnosti" name="aktivnosti" style="width:60%;">
                            <option value=""><b>Aktivnosti</b></option>                            
                            
                                                                          
                            <option value="brisanje">Obriši potkategoriju</option> 
                   
                        </select>
                        <input type="submit" name="submit" id="submit" value="Pokreni" class="btn btn-default">
                      
                    </div>
                                    
                                    </span> <a href="index.php?page=trgovina_potkategorija_unos" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Unos</a>
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
                                                    Naslov
                                                </th>
                                               
                                                <th>
                                                  Kategorija
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                        
                                        
                                        
                                   <?php
                                   
$result = $con->query("

SELECT * FROM  artikli_potkategorija


ORDER BY id DESC 

");


 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	include("include/shop/potkategorija/lib/list.php");
    	
   	
    	?>
    	

 <?php
                                   
$result2 = $con->query("

SELECT * FROM  artikli_kategorija


WHERE id='$kategorija_id'

");


 while ($obj2=mysqli_fetch_object($result2))
 
    {
    
    $kategorija_naziv=($obj2->naziv);
    	}
   	
    	?>
          






<tr>  
 <td>  <label><input type="checkbox" name="article_id[<?php echo $id; ?>]" id="<?php echo $id; ?>" value="<?php echo $id; ?>"><span class="text"></span></label></td>                     
 <td><?php echo $id; ?></td>                                          
<td><?php echo $naziv; ?></td>
<td><?php echo $kategorija_naziv; ?></td>


<td>
<a href="?page=uredi_shop_potkategoriju&id=<?php echo $id; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Uredi</a>



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