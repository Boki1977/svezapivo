<!DOCTYPE html>
<html>
<?php
include ("conection.php");

?>
<body>
<?php
$id=$_POST['id'];

?>



<div class="form-group" id="potkategorija">
                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                <label>Potkategorija</label>
                                    <select id="subcategoryID" name="potkategorija" style="width:100%;">
                                    
                                               <?php
                                                $result2 = $con->query("

                                                SELECT * FROM potkategorije 
                                                WHERE categoryID='$id'


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
</body>
</html>