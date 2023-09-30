<?php
require_once "../db.php";
$id = $_GET['link'];


panda_delete("overview","$id");
header('location: overview.php');

?>


