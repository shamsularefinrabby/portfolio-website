<?php
require_once "../db.php";


panda_image_delete("partners","id",$_GET['link'],"partners_image","partners");
header('location: partners.php');
?>