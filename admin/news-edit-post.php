<?php
session_start();
require_once "../db.php";


// $link= $_SERVER['DOCUMENT_ROOT']."/richard project/img/news/". $_POST['old_image_name'];
// unlink($link);
// $test_array= [
//     "name"=>"shamsul Arefin",
//     "Age"=>"25",
//     "phone_number"=>"01621311671",
// ];

// $image_name= $_FILES['news_new_image'];
// $inside_image_name= $image_name['name'];
// $explode= explode(".",$inside_image_name);
// $image_new_name= rand().time(). "." .end($explode);
// $temp_location= $image_name['tmp_name'];
// $image_path= "../img/news/$image_new_name";
// move_uploaded_file($temp_location,$image_path);

// $old_image_name= $_POST['old_image_name'];
$news_headline_edit=$_POST['news_headline_edit'];
$id=$_POST['hidden_id'];
$news_details=$_POST['news_details_edit'];



// extract($test_array);

// echo $name."<br>";
// echo $Age."<br>";
// echo $phone_number."<br>";

// $update_query= "UPDATE news SET image_new_name= '$image_new_name'WHERE image_new_name='$old_image_name'";
// mysqli_query(connect_to_db(),$update_query);


echo panda_update("news","news_headline,news_details","$news_headline_edit,$news_details",$id);

// header('location: news.php');



?>