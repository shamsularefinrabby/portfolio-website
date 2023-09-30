<?php
require_once "../db.php";
$title = htmlentities($_POST['title']);
$details = htmlentities($_POST['details']);
$icons= $_POST['icons'];

if($title && $details && $icons){
    panda_insert("overview","title,details,icons","'$title','$details','$icons'");
    header('location: overview.php');
}
else{
    header('location: overview.php');
}


?>