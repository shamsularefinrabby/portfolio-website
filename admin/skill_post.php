<?php
session_start();
require_once "../db.php";

$skill_name= htmlentities($_POST['skill_name']);
$percentage= $_POST['percentage'];

if($skill_name && $percentage){
    panda_insert("skill", "skill_name, percentage","'$skill_name', '$percentage'");
    header('location: skill.php');
    
  
}
else{
    header('location: skill.php');
}



?>
