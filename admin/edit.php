<?php
require_once "../db.php";

$id = $_GET['link'];

panda_update("experience" , "company_name, duration,designation,description", "'$company_name','$duration','$designation','$description'");
header('location: experience.php');
?>