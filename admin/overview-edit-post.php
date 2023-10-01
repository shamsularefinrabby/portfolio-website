<?php
require_once "../db.php";

$title=htmlentities($_POST['title']);
$details=htmlentities($_POST['details']);
$new_icons=$_POST['new_icons'];
$old_icon=$_POST['old_icon'];
$id=$_POST['hidden_id'];


$update_query = "UPDATE overview SET title='$title',details='$details' WHERE id='$id'";
mysqli_query(connect_to_db(),$update_query);


if($new_icons){
    $update_query = "UPDATE overview SET icons='$new_icons' WHERE id='$id'";
    mysqli_query(connect_to_db(),$update_query);
}
else{
    $new_icons=$old_icon;
}

header('location: overview.php');

?>