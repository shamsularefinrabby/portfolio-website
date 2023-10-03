<?php

require_once "../db.php";

$old_image_name= $_POST['old_image_name'];
$news_headline_edit=$_POST['news_headline_edit'];
$id=$_POST['hidden_id'];
$news_details=$_POST['news_details_edit'];


$image_name= $_FILES['news_new_image'];
$inside_image_name= $image_name['name'];
$explode= explode(".",$inside_image_name);


if($inside_image_name){
    $image_new_name=rand().time(). ".". end($explode);
    
}else{
    $image_new_name=$old_image_name;

}


$temp_location= $image_name['tmp_name'];
$image_path= "../img/news/$image_new_name";
move_uploaded_file($temp_location,$image_path);






if($image_new_name){
    
    $update_query= "UPDATE news SET image_new_name= '$image_new_name'WHERE image_new_name='$old_image_name'";
    mysqli_query(connect_to_db(),$update_query);
    
    $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/news/"."$old_image_name";    
    unlink($link);
}



echo panda_update("news","news_headline*news_details","$news_headline_edit*$news_details",$id);

header('location: news.php');



?>