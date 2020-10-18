<?php
(int)$id = ( isset( $_GET["id"] ) ? $_GET["id"] : 0 );

$result = $con->query("

SELECT * FROM artikli_potkategorija

WHERE id='$id'

");

 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	include("include/shop/potkategorija/lib/list.php");
    }
    

//---uzimanje kategorije trenutne

$result = $con->query("

SELECT * FROM artikli_kategorija

WHERE id='$kategorija_id'

");

 while ($obj=mysqli_fetch_object($result))
 
    {
    
    	$kategorija_naziv=($obj->naziv);
    }

?>
 
 <form id="registrationForm" method="post" action="update_shop_potkategorije.php?id=<?php echo $id; ?>"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                  
                                                  
       <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                           Unos potkategorije
                        </h1>
                    </div>
                <div class="header-buttons">
                     <button type="submit" class="btn btn-labeled btn-palegreen"><i class="btn-label glyphicon glyphicon-ok"></i>Spremi</button>
                                      
                                   
                    </div>
                </div>                                              
                                                  

<div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 form-horizontal">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">Osnovni podaci</span>
                                        </div>
                                        <div class="widget-body">
                                           
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Naslov</label>
                                                        <input type="text" class="form-control" name="naziv" value="<?php echo $naziv; ?>" placeholder="Naslov"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                    </div>
                                                     
                                                
                                                <div class="form-group">
                                                <div class="col-lg-12">
                                                        <textarea class="form-control" placeholder="Opis" name="opis" rows="10"><?php echo $opis; ?></textarea>
                                                    </div>
                                                
                                                </div>
                                                
                                               
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Kategorija</label>
                                                       <select id="kategorija_id" name="kategorija_id" style="width:100%;">
                                            
                                                <option value="<?php echo $kategorija_id; ?>"><?php echo $kategorija_naziv; ?></option>
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM artikli_kategorija WHERE id!='$kategorija_id'
                                                


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
                                    </div>
                                </div>
                                
                            










                            </div>
                            <div class="row">
                            
                            
                            
                                <div class="col-lg-12col-sm-12 col-xs-12">
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
                                                                            	    <input id="fieldID" type="text" value="<?php echo $potkat_fotka; ?>" name="potkat_fotka" class="fotka_refresh">
	    <a href="filemanager/dialog.php?type=1&field_id=fieldID" class="btn iframe-btn" type="button">Otvori galeriju</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-sm-12">
                                                                    <div class="form-group" id="show_image">
                                                                        <img src="<?php echo $potkat_fotka; ?>" width="150" alt="">
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