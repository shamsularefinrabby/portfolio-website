<?php
require_once "../db.php";


$company_name= htmlentities($_POST['company_name']);
$duration= htmlentities($_POST['duration']);
$designation= htmlentities($_POST['designation']);
$description= htmlentities($_POST['description']);
$id= $_POST['hidden_id'];

panda_update("experience","company_name,duration,designation","$company_name,$duration,$designation","$id");

$update_query= "UPDATE experience SET description='$description' WHERE id='$id'";
mysqli_query(connect_to_db(),$update_query);
header('location: experience.php');

?>