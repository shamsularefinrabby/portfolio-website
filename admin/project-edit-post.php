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
    
    $update_query= "UPDATE projects SET project_image= '$image_new_name'WHERE project_image='$old_image_name'";
   
    mysqli_query(connect_to_db(),$update_query);
    
    $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/portfolio/"."$old_img_name";    
    unlink($link);
}


echo panda_update("projects","project_name,clients,completion,project_type,author,budget,branding","$project_name,$clients,$completion,$project_type,$author,$budget,$branding",$id);

header('location: projects.php');



?>