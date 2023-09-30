<?php
require_once "../db.php";
$id = $_GET['link'];


panda_delete("skill","$id");
header('location: skill.php');

?>


