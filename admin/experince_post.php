<?php
session_start();
require_once "../db.php";

$company_name= htmlentities($_POST['company_name']);
$duration= htmlentities($_POST['duration']);
$designation= htmlentities($_POST['designation']);
$description= htmlentities($_POST['description']);

if($company_name && $duration && $designation && $description){
    
    panda_insert("experience","company_name,duration,designation,description","'$company_name','$duration','$designation','$description'");
    header('location: experience.php');
}
?>