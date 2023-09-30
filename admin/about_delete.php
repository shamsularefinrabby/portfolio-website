<?php
require_once "../db.php";
$id = $_GET['link'];


panda_delete("about","$id");
header('location: about.php');

?>


