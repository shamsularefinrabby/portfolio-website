<?php

require_once "../db.php";


$image_name=$_FILES['partner_image'];
$inside_image_name=$image_name['name'];
$after_explode = explode(".",$inside_image_name);
$partners_image= rand().time(). ".". end($after_explode);
$temp_location= $image_name['tmp_name'];
$new_location= "../img/partners/$partners_image";
move_uploaded_file($temp_location, $new_location);

if($inside_image_name){
    panda_insert("partners", "partners_image","'$partners_image'" );
    header('location: partners.php');

}
else{
    header('location: partners.php');

}


?>