<?php
(int)$id = ( isset( $_GET["id"] ) ? $_GET["id"] : 0 );

$result = $con->query("

SELECT * FROM artikl

WHERE id='$id'

");

 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	include("include/shop/artikli/lib/list.php");
    }
    
// preuzimanje kategorije

$result = $con->query("

SELECT * FROM artikli_kategorija
WHERE id='$kategorija'

");
 while ($obj=mysqli_fetch_object($result))
 
    {
    $kategorija_naziv=($obj->naziv);
    }
    
    
 //preuzimanje potkategorije   
    
    $result = $con->query("

SELECT * FROM artikli_potkategorija
WHERE id='$potkategorija'

");
 while ($obj=mysqli_fetch_object($result))
 
    {
    $potkategorija_naziv=($obj->naziv);
    }
    
    
    











?>
 
 <form id="registrationForm" method="post" action="update_artikla.php?id=<?php echo $id; ?>"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                  
                                                  
       <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Unos proizvoda
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
                                                  
                                                    <div class="col-lg-12"><label>Šifra proizvoda</label>
                                                        <input type="text" class="form-control" name="sifra" value="<?php echo $sifra; ?>" placeholder="Šifra proizvoda"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Naziv proizvoda</label>
                                                        <input type="text" class="form-control" name="naziv" value="<?php echo $naziv;  ?>" placeholder="Naziv proizvoda"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                </div>
                                                    
                                                    
                                                    
                                                    
                                              
                                              
                                                
                                               
                                                <div class="form-group">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Kategorija proizvoda</label>
                                    <select id="kategorija" name="kategorija" style="width:100%;" data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan izbor">
                                                <option value="<?php echo $kategorija; ?>" selected><?php echo $kategorija_naziv; ?></option>
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM artikli_kategorija
                                                
                                            WHERE id!='$kategorija'

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
                                                

                                                <div class="form-group" id="potkategorija_shop_trenutna">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Potkategorija</label>
                                    <select id="potkategorija_trenutna" name="potkategorija_trenutna" style="width:100%;">
                                    
                                             
                                                
                                         
                                                <option value="<?php echo $potkategorija; ?>" selected><?php echo $potkategorija_naziv; ?></option>
                                                
                                               
                                                
                                           
                                                <?php
                                                $result2 = $con->query("

                                                SELECT * FROM artikli_potkategorija 
                                                WHERE id!='$potkategorija'
                                                AND kategorija_id='$kategorija'

                                                  ");
                                                 



                                             while ($obj2=mysqli_fetch_object($result2))
 
                                                 {
                                                $potkategorija_naziv=($obj2->naziv);
                                                $potkategorija_id=($obj2->id);
                                                ?>
                                                
                                         
                                                <option value="<?php echo $potkategorija_id; ?>"><?php echo $potkategorija_naziv; ?></option>
                                                
                                               
                                                
                                            <?php
                                         }
                                         ?>
                                                
                                                
                                                
                                                
                                            </select>
                                </div>
                                                
                               </div>
                                                
                                                
                                                
                                                
                                                <div id="potkategorija_shop"></div>
                                                

                                                
                                                
                                               
                                           
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
                                                  
                                                    <div class="col-lg-12"><label>Količina</label>
                                                        <input type="text" class="form-control" name="kolicina" value="<?php echo $kolicina; ?>" placeholder="Količina"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                </div>
                                                     
                                                    <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Težina</label>
                                                        <input type="text" class="form-control" name="tezina" value="<?php echo $tezina; ?>" placeholder="Težina"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                </div>  
                                                     

                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Cijena</label>
                                                        <input type="text" class="form-control" name="cijena" value="<?php echo $cijena; ?>" placeholder="Cijena"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Akcijska cijena</label>
                                                        <input type="text" class="form-control" name="akcija" value="<?php echo $akcija; ?>" placeholder="Akcijska cijena"/>
                                                    </div>
                                                </div>



                                                     
                                                    
                                                    
                                                     
                                                    
                                                    
                                                    
                                                      
                                                    
                                                     <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Pozicija</label>
                                                       <select id="pozicija_select" name="pozicija" style="width:100%;">
                                                  
                                              
                                                <option value="<?php echo $pozicija_naziv; ?>" selected/><?php echo $pozicija_naziv; ?></option>
                                                
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM pozicija 
                                                
                                                WHERE pozicija!='$pozicija_naziv'

                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                $pozicija_naziv=($obj->pozicija);
                                                ?>
                                                
                                                
                                                <option value="<?php echo $pozicija_naziv; ?>"/><?php echo $pozicija_naziv; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                            </select>
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
                                            <span class="widget-caption">Opis artikla</span>
                                        </div>
                                                <div class="widget-body">
                                                    <div id="registration-form">
                                                      
                                                           <?php
include_once("fckeditor/fckeditor.php") ;

$oFCKeditor = new FCKeditor('opis') ;
$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value = ''.$opis_artikla.'' ;
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
                                                                            	    <input id="fieldID" type="text" value="<?php echo $fotka; ?>" name="fotka" value="" class="fotka_refresh">
	    <a href="filemanager/dialog.php?type=1&field_id=fieldID" class="btn iframe-btn" type="button">Otvori galeriju</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-sm-12">
                                                                    <div class="form-group" id="show_image">
                                                                        
                                                                    </div>

                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName2">Galerija ( opcija )</label>
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Unesi URL Galerije" name="galerija" value="<?php echo $galerija; ?>">
                                                                            <i class="fa fa-file-image-o"></i>
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