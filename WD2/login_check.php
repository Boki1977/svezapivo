<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start(); 
include("conection.php");
$username=$_SESSION['username'];
$pasword=$_SESSION['pasword'];

$pasword = md5( $pasword );

//---provjera postoji li aktivan korisnik u bazi

//---provjera postoji li aktivan korisnik u bazi
$result = $con->query("SELECT * FROM tblusers WHERE user_email='$username' AND user_password='$pasword'AND status >'0'");	
$user_num=mysqli_num_rows($result);

if($user_num > '0')
{
while ($obj=mysqli_fetch_object($result))
 
                                {
include("include/autori/lib/list.php");

}
}





?>