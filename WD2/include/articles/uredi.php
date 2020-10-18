<?php
(int)$id = ( isset( $_GET["id"] ) ? $_GET["id"] : 0 );

$result = $con->query("

SELECT * FROM tblnewsarticles 

WHERE articleID='$id'

");

 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	include("include/articles/lib/list.php");
    }
    
    //---vrijeme objave
    
     //----Riktanj datuma
$article_date = explode(" ",$article_date); 
list($datum,$vrijeme)=$article_date; 
    
$vrijeme = explode(":",$vrijeme); 
list($sat,$minuta,$sekunda)=$vrijeme; 
    $vrijeme="$sat:$minuta";
    

    //---vrijeme završetka

$expiration_date = explode(" ",$expiration_date); 
list($datum2,$vrijeme2)=$expiration_date; 
    
$vrijeme2 = explode(":",$vrijeme2); 
list($sat2,$minuta2,$sekunda2)=$vrijeme2; 
    $vrijeme2="$sat2:$minuta2";


?>
 
 <form id="registrationForm" method="post" action="update_sadrzaja.php?id=<?php echo $id; ?>"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                  
                                                  
       <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Uređivanje sadržaja
                        </h1>
                    </div>
                <div class="header-buttons">
                     <button type="submit" class="btn btn-labeled btn-palegreen"><i class="btn-label glyphicon glyphicon-ok"></i>Spremi</button>
                                      
                                   
                    </div>
                </div>                                              
                                                  

<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-8 col-sm-8 col-xs-12 form-horizontal">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">Osnovni podaci</span>
                                        </div>
                                        <div class="widget-body">
                                           
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Naslov</label>
                                                        <input type="text" class="form-control" name="article_title" placeholder="Naslov"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" value="<?php echo $article_title; ?>"/>
                                                    </div>
                                                    </div>
                                                     <div class="form-group">
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" name="article_extra" placeholder="Nad naslov" name="article_extra"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" value="<?php echo $article_extra; ?>"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <div class="col-lg-12">
                                                        <textarea class="form-control" placeholder="Opis sadržaja" name="article_description" rows="10"><?php echo $article_description; ?></textarea>
                                                    </div>
                                                
                                                </div>
                                                
                                               
                                                <div class="form-group">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Kategorija</label>
                                    <select id="subcategoryID" name="subcategoryID" style="width:100%;" data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan izbor">
                                               
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM tblnewscategories 
                                                WHERE categoryID='$subcategoryID'


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/kategorije/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $categoryID; ?>" id="2" selected/><?php echo $category_title; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM tblnewscategories 
                                                WHERE categoryID!='$subcategoryID'


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/kategorije/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $categoryID; ?>" id="2" /><?php echo $category_title; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                              
                                                
                                                
                                                
                                            </select> 
                                </div>
                                
                               
                                
                                
                                                
                                                </div>
                                                
                                             
                                              
        
                                               <div class="form-group" id="potkategorija_trenutna">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Potkategorija</label>
                                    <select id="subcategoryID_trenutni" name="potkategorija_trenutna" style="width:100%;">
                                    
                                               <?php
                                                $result2 = $con->query("

                                                SELECT * FROM potkategorije 
                                                WHERE subcategoryID='$potkategorija_id'


                                                  ");
                                                 



                                             while ($obj2=mysqli_fetch_object($result2))
 
                                                 {
                                                $category_title=($obj2->category_title);
                                                $subcategoryID=($obj2->subcategoryID);
                                                ?>
                                                
                                         
                                                <option value="<?php echo $subcategoryID; ?>" selected><?php echo $category_title; ?></option>
                                                
                                               
                                                
                                            <?php
                                         }
                                         ?>
                                                <?php
                                                $result2 = $con->query("

                                                SELECT * FROM potkategorije 
                                                WHERE subcategoryID!='$potkategorija_id'
                                                AND categoryID='$kategorija_id'

                                                  ");
                                                 



                                             while ($obj2=mysqli_fetch_object($result2))
 
                                                 {
                                                $category_title=($obj2->category_title);
                                                $subcategoryID=($obj2->subcategoryID);
                                                ?>
                                                
                                         
                                                <option value="<?php echo $subcategoryID; ?>"><?php echo $category_title; ?></option>
                                                
                                               
                                                
                                            <?php
                                         }
                                         ?>
                                                
                                                
                                                
                                                
                                            </select>
                                </div>
                                                
</div>
                                
                                                
                                                

                                                
                                                <div id="potkategorija"></div>
                                                

                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Autor</label>
                                                       <select id="article_author" name="article_author" style="width:100%;">
                                             
                                                
                                                
                                                
                                                
                                                <?php
                                                
                                                if($korisnik_status !="admin"){
                                                
                                                $result = $con->query("

                                                SELECT * FROM tblusers WHERE userID='$userID'


                                                  ");
                                                  



                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/autori/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $pseudonim; ?>"/><?php echo $user_name; ?></option>
                                                
                                                <?php
                                             }
                                          }
                                             ?>
                                             
                                             
                                             <?php
                                                
                                                if($korisnik_status=="admin"){
                                                
                                                ?>
                                                
                                                 <option value="<?php echo $k_id; ?>" selected="selected"/><?php echo $k_name; ?></option>
                                                
                                                
                                            <?php                                                
                                                $result = $con->query("

                                                SELECT * FROM tblusers WHERE userID!='$userID'


                                                  ");
                                                  



                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/autori/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $userID; ?>"/><?php echo $user_name; ?></option>
                                                
                                                <?php
                                             }
                                          }
                                             ?>
                                                
                                            </select>
                                                    </div>
                                                    </div>

                                                
                                               
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">Osnovni podaci</span>
                                        </div>
                                        <div class="widget-body form-horizontal">
                                            
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Vrijeme objave</label>
                                                        <input name="article_date" type="datetime-local" id="checkbox1" value="<?php echo $datum; ?>T<?php echo $vrijeme; ?>" class="form-control">
                                                    </div>
                                                    </div>
                                                     
                                                     
                                                     
                                                     <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Kraj objave</label>
                                                        <input name="expiration_date" type="datetime-local" id="checkbox1" value="<?php echo $datum2; ?>T<?php echo $vrijeme2; ?>" class="form-control">
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                     <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Oznaka</label>
                                                    
                                                  
                                                    
                                                       <select id="oznake" name="oznake" style="width:100%;">
                                                <option value="<?php echo $oznake; ?>" selected><?php echo $oznake; ?></option>
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM oznake WHERE naziv!='$oznake'
                                                


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/oznake/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $naziv; ?>" id="2"/><?php echo $naziv; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                            </select>
                                                   
                                                 
                                                   
                                                    </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                      <div class="form-group">
                                                  
                                                    <div class="col-lg-3"><label>Komentari</label>
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-blue" <?php echo $komentar_check; ?> name="komentari" value="1">
                                                            <span class="text">Omogući komentare</span>
                                                        </label>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-3"><label>Najava</label>
                                                        <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="colored-blue" value="da" <?php echo $najave_check; ?>name="najave">
                                                            <span class="text">Pridodjeli u najavu</span>
                                                        </label>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Pozicija</label>
                                                       <select id="pozicija_select" name="article_type" style="width:100%;">
                                              
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM pozicija WHERE id ='$article_type'
                                                


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/pozicija/lib/list.php");
                                                ?>
                                                
                                                 <option value="<?php echo $id; ?>" selected/><?php echo $pozicija; ?></option>
                                                 <?php
                                             }
                                             ?>
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM pozicija WHERE id !='$article_type'
                                                


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/pozicija/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $id; ?>"/><?php echo $pozicija; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                            </select>
                                                    </div>
                                                    </div>
                                                    
                                                    


                                               <div id="pozicija"></div>




                                          




                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Tagovi</label>
                                                         <input type="text" data-role="tagsinput" placeholder="Unesi tagove" name="meta_tagovi" value="<?php echo $meta_tagovi; ?>"/>
                                                    </div>
                                                    </div>
                                                
                                                
                                                
                                                
                                               
                                                
                                                

                                                
                                                
                                                

                                                

                                                
                                               
                                            
                                        </div>
                                    </div>
                                </div>










                            </div>
                            <div class="row">
                            
                            <div class="col-lg-8 col-sm-8 col-xs-8">
                                            <div class="widget flat radius-bordered">
                                                <div class="widget-header bordered-bottom bordered-pink">
                                            <span class="widget-caption">TEKST SADRŽAJA</span>
                                        </div>
                                                <div class="widget-body">
                                                    <div id="registration-form">
                                                      
                                                           <?php
include_once("fckeditor/fckeditor.php") ;

$oFCKeditor = new FCKeditor('article_html') ;
$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value = ''.$article_html.'' ;
$oFCKeditor->Create() ;


?>
                                                           
                                                          
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            
                                <div class="col-lg-4 col-sm-4 col-xs-4">
                                            <div class="widget flat radius-bordered">
                                                <div class="widget-header bordered-bottom bordered-pink">
                                            <span class="widget-caption">MULTIMEDIJA</span>
                                        </div>
                                                <div class="widget-body">
                                                    <div id="registration-form">
                                                      
                                                           
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail2">Naslovna fotografija</label>
                                                                        <span class="input-icon icon-right">
                                                                            	    <input id="fieldID" type="text" value="<?php echo $fotka_nova; ?>" name="fotka_nova" class="fotka_refresh">
	    <a href="filemanager/dialog.php?type=1&field_id=fieldID" class="btn iframe-btn" type="button">Otvori galeriju</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-sm-12">
                                                                    <div class="form-group" id="show_image">
                                                                        <img src="<?php echo $fotka_nova; ?>" width="150" alt="">
                                                                    </div>

                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName2">Galerija ( opcija )</label>
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Unesi URL Galerije" name="galerija_nova" value="<?php echo $galerija_nova; ?>">
                                                                            <i class="fa fa-file-image-o"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName2">Video ( youtube url )</label>
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Unesi YOUTUBE kod" value="<?php echo $video; ?>" name="video">
                                                                            <i class="fa fa-youtube"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                
                                                            
                                                                
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     </form>