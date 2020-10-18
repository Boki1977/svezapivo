<!DOCTYPE html>
<html>
<?php
include ("conection.php");
include("include/head.php");
?>
<body>
<?php
$id=$_POST['id'];
if($id==4){
?>



    <div class="form-group" id="pozicija">
                                                  
                                                    <div class="col-lg-12"><label>Početak trajanja na ovoj poziciji</label>
                                                        <input name="pozicija_pocetak" type="datetime-local" id="checkbox1" value="<?php echo $danas_datum; ?>T<?php echo $danas_vrijeme; ?>" class="form-control">
                                                    </div>
                                                    </div>
                                                     
                                                     
                                                     
                                                     <div class="form-group" id="pozicija">
                                                  
                                                    <div class="col-lg-12"><label>Kraj trajanja na ovoj poziciji</label>
                                                        <input name="pozicija_kraj" type="datetime-local" id="checkbox1" value="9999-01-01T01:01:00" class="form-control">
                                                    </div>
                                                    </div>
                                                
<?php
}
?>
</body>
</html>