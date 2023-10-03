<?php
require_once "../db.php";

$title=htmlentities($_POST['title']);
$details=htmlentities($_POST['details']);
$new_icons=$_POST['new_icons'];
$old_icon=$_POST['old_icon'];
$id=$_POST['hidden_id'];



panda_update("overview","title*details","$title*$details","$id");


if($new_icons){
    $update_query = "UPDATE overview SET icons='$new_icons' WHERE id='$id'";
    mysqli_query(connect_to_db(),$update_query);
}
else{
    $new_icons=$old_icon;
}

header('location: overview.php');

?>