<?php

	
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
	

$results = $con->query("UPDATE tblnewsarticles SET status='2' WHERE articleID='$report_id'");	
	

	}
		 
		if($user_status=='3')
	{	
	
$results = $con->query("UPDATE tblnewsarticles SET status='2' WHERE articleID='$report_id' AND authorID='$k_id'");		

	}
		 
		 
		  		
   }
   }
   }





    if($aktivnost=="cekanje"){
    	
    	
    	
if(!empty($_POST['article_id'])){
	

	
	
     foreach($_POST['article_id'] as $report_id){



	if($user_status=='4')
	{	
	

$results = $con->query("UPDATE tblnewsarticles SET status='1' WHERE articleID='$report_id'");	
	

	}
		 
		if($user_status=='3')
	{	
	
$results = $con->query("UPDATE tblnewsarticles SET status='1' WHERE articleID='$report_id' AND authorID='$k_id'");		

	}
		 
		 
		  		
   }
   }
   }






}
    
}

?>


<form id="form1" name="form1" method="post" action="?page=pregled_sadrzaja&radnja=update">


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
                                                    Potkategorija
                                                </th>
                                                <th>
                                                    Br. pogleda
                                                </th>
                                                <th>
                                                    Datum
                                                </th>
                                                <th>

                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        
                                        
                                        
                                        
                                   <?php
                                   
$result = $con->query("

SELECT * FROM tblnewsarticles 


ORDER BY article_date DESC LIMIT 80

");


 while ($obj=mysqli_fetch_object($result))
 
    {
    	$ID=($obj->articleID);
    	include("include/articles/lib/list.php");
    	
    	if($status > 1){
    	
    	$article_status='
    	<div class="btn-group">
                                        <div class="btn btn-sm btn-success"><i class="fa fa-plus-square"></i></div>
                                        
                                       
</div>
';
    	
    	}
    	
    	    	if($status < 2){
    	
    	$article_status='
    	<div class="btn-group">
                                        <div class="btn btn-sm btn-danger"><i class="fa fa-plus-square"></i></div>
                                        
                                       
</div>
';
    	
    	}
    	
    	?>
    	
    	        <?php
                $result2 = $con->query("

                 SELECT * FROM tblnewscategories 
                  WHERE categoryID='$subcategoryID'
                    ");
                    
                while ($obj2=mysqli_fetch_object($result2))
 
                 {
                 $category_title=($obj2->category_title);
                 
                 
                 ?>
                 
                 <?php
                $result3 = $con->query("

                 SELECT * FROM potkategorije
                  WHERE subcategoryID='$potkategorija'
                    ");
                    
                while ($obj3=mysqli_fetch_object($result3))
 
                 {
                 $category_title2=($obj3->category_title);
                 }
                 
                 ?>
                 
                 
                 
                 <?php
                      }                       
                 ?>





   <?php
                $result4 = $con->query("

                 SELECT * FROM tblusers
                  WHERE userID='authorID'
                    ");
                    
                while ($obj4=mysqli_fetch_object($result4))
 
                 {
                 $pseudonim4=($obj4->pseudonim);
                 }
                 
                 ?>


<tr>  
 <td>  <label><input type="checkbox" name="article_id[<?php echo $ID; ?>]" id="<?php echo $ID; ?>" value="<?php echo $ID; ?>"><span class="text"></span></label></td>                     
 <td><?php echo $ID; ?></td>                                          
<td><?php echo $article_title; ?></td>
<td><?php echo $category_title; ?></td>
<td><?php echo $category_title2; ?></td>
<td><?php echo $viewed_count; ?></td>
<td class="center "><?php echo $article_date; ?></td>
<td>
<a href="?page=uredi_sadrzaj&id=<?php echo $ID; ?>" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Uredi</a>


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