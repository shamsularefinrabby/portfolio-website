<?php
require_once "../db.php";


$name= htmlentities($_POST['name']);
$term= htmlentities($_POST['term']);
$story= htmlentities($_POST['story']);

$id= $_POST['hidden_id'];

panda_update("about","name,term,story","$name,$term,$story","$id");

header('location: about.php');

?>