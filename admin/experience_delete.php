<?php
require_once "../db.php";
$id = $_GET['link'];


if (panda_delete("experience","$id")){
    header('location: experience.php');
}
?>


