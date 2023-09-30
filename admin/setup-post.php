<?php
require_once "../db.php";
$image_name= $_FILES['main_image'];
$inside_image_name=$image_name['name'];
$after_explode=explode(".", $inside_image_name);
if($inside_image_name){
    $image_new_name=rand().time(). ".". end($after_explode);
    
}else{
    $image_new_name=$old_img_name;

}

$temp_location=$image_name['tmp_name'];
print_r($temp_location);
$new_location="../img/setup/$image_new_name";
move_uploaded_file($temp_location,$new_location);

foreach($_POST as $setup_name=>$setup_value){
    $update_query= "UPDATE setups SET setup_value='$setup_value'WHERE setup_name='$setup_name'";
    mysqli_query(connect_to_db(),$update_query);
}


$old_img_name=$_POST['old_photo_name'];
if($image_new_name){
    
    $update_query= "UPDATE setups SET setup_value='$image_new_name' WHERE setup_name='main_image'";
    mysqli_query(connect_to_db(),$update_query);
    $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/setup/"."$old_img_name";    
    unlink($link);
}else{
    echo $old_img_name;
}

header('location: setup.php');

?>