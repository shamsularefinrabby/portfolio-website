<?php
require_once "../db.php";


$company_name= htmlentities($_POST['company_name']);
$duration= htmlentities($_POST['duration']);
$designation= htmlentities($_POST['designation']);
$description= htmlentities($_POST['description']);
$id= $_POST['hidden_id'];

panda_update("experience","company_name,duration,designation,description","$company_name,$duration,$designation,$description","$id");

header('location: experience.php');

?>