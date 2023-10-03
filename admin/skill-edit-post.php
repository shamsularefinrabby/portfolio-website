<?php
require_once "../db.php";

$skill_name= htmlentities($_POST['skill_name']);
$percentage= $_POST['percentage'];
$id= $_POST['hidden_id'];

panda_update("skill","skill_name*percentage","$skill_name*$percentage","$id");

header('location: skill.php');

?>