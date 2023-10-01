<?php
require_once "../db.php";


$name= htmlentities($_POST['name']);
$term= htmlentities($_POST['term']);
$story= htmlentities($_POST['story']);

$id= $_POST['hidden_id'];

panda_update("about","name,term","$name,$term","$id");


$update_query= "UPDATE about SET story='$story' WHERE id='$id'";
mysqli_query(connect_to_db(),$update_query);

header('location: about.php');

?>