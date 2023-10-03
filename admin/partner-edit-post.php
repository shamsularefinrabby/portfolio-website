<?php

require_once "../db.php";

$old_photo_name= $_POST['old_photo_name'];



$image_name=$_FILES['partner_new_image'];
$inside_image_name=$image_name['name'];
$after_explode = explode(".",$inside_image_name);

if($inside_image_name){
    $partners_image= rand().time(). ".". end($after_explode);
   
    
}else{
    $partners_image=$old_photo_name;

}




$temp_location= $image_name['tmp_name'];
$new_location= "../img/partners/$partners_image";
move_uploaded_file($temp_location, $new_location);

$id=$_POST['hidden_id'];

if($inside_image_name){
    $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/partners/". $old_photo_name;
    unlink($link);

    panda_update("partners","partners_image","$partners_image","$id");
}




header('location: partners.php');
?>