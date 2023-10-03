<?php

require_once "../db.php";



$image_name= $_FILES['project_new_image'];
$inside_image_name= $image_name['name'];
$explode= explode(".",$inside_image_name);

if($inside_image_name){
    $image_new_name=rand().time(). ".". end($explode);
    
}else{
    $image_new_name=$old_image_name;

}


$temp_location= $image_name['tmp_name'];
$image_path= "../img/portfolio/$image_new_name";
move_uploaded_file($temp_location,$image_path);


$old_image_name= $_POST['old_image_name'];
$project_name= $_POST['project_name'];
$clients= $_POST['clients'];
$completion= $_POST['completion'];
$project_type= $_POST['project_type'];
$author= $_POST['author'];
$budget= $_POST['budget'];
$branding= htmlentities($_POST['branding']);

$id=$_POST['hidden_id'];


if($image_new_name){
    
    panda_update("projects","project_name*clients*completion*project_type*author*budget*branding*project_image","$project_name*$clients*$completion*$project_type*$author*$budget*$branding*$image_new_name","$id");
    
    $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/portfolio/"."$old_img_name";    
    unlink($link);
}

header('location: projects.php');



?>