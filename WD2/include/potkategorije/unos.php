
 
 <form id="registrationForm" method="post" action="unos_potkategorije.php"
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
                                                        <input type="text" class="form-control" name="category_title" placeholder="Naslov"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Obavezan unos" />
                                                    </div>
                                                    </div>
                                                     
                                                
                                                <div class="form-group">
                                                <div class="col-lg-12">
                                                        <textarea class="form-control" placeholder="Opis" name="category_description" rows="10"></textarea>
                                                    </div>
                                                
                                                </div>
                                                
                                               
                                                
                                                <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Kategorija</label>
                                                       <select id="categoryID" name="categoryID" style="width:100%;">
                                            
                                                
                                                <?php
                                                $result = $con->query("

                                                SELECT * FROM tblnewscategories 
                                                


                                                  ");




                                             while ($obj=mysqli_fetch_object($result))
 
                                                 {
                                                include ("include/kategorije/lib/list.php");
                                                ?>
                                                
                                                
                                                <option value="<?php echo $categoryID; ?>" id="2"/><?php echo $category_title; ?></option>
                                                
                                                <?php
                                             }
                                             ?>
                                                
                                            </select>
                                                    </div>
                                                    </div>

                                                
                                               
                                                
                                            <div class="form-group">
                                                  
                                                    <div class="col-lg-12"><label>Externi link</label>
                                                        <input type="text" class="form-control" name="ext_link" placeholder="Externi link"/>
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
                                                                            	    <input id="fieldID" type="text" value="" name="potkat_fotka" class="fotka_refresh">
	    <a href="filemanager/dialog.php?type=1&field_id=fieldID" class="btn iframe-btn" type="button">Otvori galeriju</a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                 <div class="col-sm-12">
                                                                    <div class="form-group" id="show_image">
                                                                        
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