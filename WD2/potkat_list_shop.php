<!DOCTYPE html>
<html>
<?php
include ("conection.php");

?>
<body>
<?php
$id=$_POST['id'];

?>



<div class="form-group" id="potkategorija_shop">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Potkategorija</label>
                                    <select id="id" name="potkategorija" style="width:100%;">
                                    
                                               <?php
                                                $result2 = $con->query("

                                                SELECT * FROM artikli_potkategorija
                                                WHERE id='$id'


                                                  ");
                                                 



                                             while ($obj2=mysqli_fetch_object($result2))
 
                                                 {
                                                $naziv=($obj2->naziv);
                                                $id=($obj2->id);
                                                ?>
                                                
                                         
                                                <option value="<?php echo $id; ?>"><?php echo $naziv; ?></option>
                                                
                                               
                                                
                                            <?php
                                         }
                                         ?>
                                                
                                            </select>
                                </div>
                                                
</div>
</body>
</html>