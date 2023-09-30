<?php

require_once "../db.php";

$old_photo_name= $_POST['old_photo_name'];
$link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/partners/". $old_photo_name;
unlink($link);


$image_name=$_FILES['partner_new_image'];
$inside_image_name=$image_name['name'];
$after_explode = explode(".",$inside_image_name);
$partners_image= rand().time(). ".". end($after_explode);
$temp_location= $image_name['tmp_name'];
$new_location= "../img/partners/$partners_image";
move_uploaded_file($temp_location, $new_location);



$update_query= "UPDATE partners SET partners_image='$partners_image'  WHERE partners_image='$old_photo_name' ";
mysqli_query(connect_to_db(),$update_query);

header('location: partners.php');
?>