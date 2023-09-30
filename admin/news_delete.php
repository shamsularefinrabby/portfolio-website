<?php
require_once "../db.php";


panda_image_delete("news","id",$_GET['link'],"image_new_name","news");
header('location: news.php');
?>



