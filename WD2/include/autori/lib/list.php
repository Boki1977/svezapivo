<?php
$userID=($obj->userID);
$user_name=($obj->user_name);
$user_password=($obj->user_password);
$user_email=($obj->user_email);
$user_joindate=($obj->user_joindate);
$brkomentara=($obj->brkomentara);
$avatar=($obj->avatar);
$random=($obj->random);
$status=($obj->status);
$pseudonim=($obj->pseudonim);


if($status==4){
$korisnik_status="admin";
}

$k_id=$userID;
$k_name=$user_name;
$user_status=$status;


?>