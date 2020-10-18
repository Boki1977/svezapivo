<?php

	
if(isset($_GET['radnja'])) 
{
$radnja = $_GET['radnja'];
    
if($radnja=="update"){
    
   
    
$aktivnost=$_POST['aktivnosti'];
    
    
    if($aktivnost=="objava"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){

	

$results = $con->query("UPDATE tblnewscategories SET menu='1' WHERE categoryID='$report_id'");	
	



		 
		 
		  		
   }
   }
   }





    if($aktivnost=="cekanje"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){




	

$results = $con->query("UPDATE tblnewscategories SET menu='0' WHERE categoryID='$report_id'");	
	


 
		 
		  		
   }
   }
   }






}
    
}

?>


<form id="form1" name="form1" method="post" action="?page=pregled_kategorije&radnja=update">


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
                                    
                                    </span>
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

SELECT * FROM  potkategorije


ORDER BY subcategoryID DESC 

");


 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	include("include/potkategorije/lib/list.php");
    	
   	
    	?>
    	

 <?php
                                   
$result2 = $con->query("

SELECT * FROM  tblnewscategories


WHERE categoryID='$categoryID'

");


 while ($obj2=mysqli_fetch_object($result2))
 
    {
    
    $kategorija_title=($obj2->category_title);
    	}
   	
    	?>
          






<tr>  
 <td>  <label><input type="checkbox" name="article_id[<?php echo $categoryID; ?>]" id="<?php echo $categoryID; ?>" value="<?php echo $categoryID; ?>"><span class="text"></span></label></td>                     
 <td><?php echo $subcategoryID; ?></td>                                          
<td><?php echo $category_title; ?></td>
<td><?php echo $kategorija_title; ?></td>


<td>
<a href="?page=uredi_potkategoriju&id=<?php echo $subcategoryID; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Uredi</a>



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