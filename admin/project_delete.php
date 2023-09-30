<?php
require_once "../db.php";


panda_image_delete("projects","id",$_GET['link'],"project_image","portfolio");
header('location: projects.php');

?>


