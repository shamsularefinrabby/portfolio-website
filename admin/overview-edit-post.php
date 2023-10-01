<?php
require_once "../db.php";

$title = htmlentities($_POST['title']);
$details = htmlentities($_POST['details']);
$icons= $_POST['icons'];
$id= $_POST['hidden_id'];

panda_update("overview","title,details,icons","$title,$details,$icons","$id");

header('location: overview.php');

?>