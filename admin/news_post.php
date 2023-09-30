
<?php
require_once "../db.php";

$image_name= $_FILES['news_image'];
$inside_image_name=$image_name['name'];
$after_explode=explode(".", $inside_image_name);
$image_new_name=rand().time(). ".". end($after_explode); 

$temp_location=$image_name['tmp_name'];
$new_location="../img/news/$image_new_name";
move_uploaded_file($temp_location,$new_location);

date_default_timezone_set("Asia/dhaka");
$current_time_and_date = date("Y-m-d");

$news_headline=htmlentities($_POST['news_headline']);
$news_details=htmlentities($_POST['news_details']);

if($news_headline && $image_new_name && $news_details && $current_time_and_date){
    panda_insert("news","news_headline,image_new_name,news_details,date_time","'$news_headline','$image_new_name','$news_details','$current_time_and_date'");
    header('location: news.php');
}
else{
    header('location: news.php');
}


?>