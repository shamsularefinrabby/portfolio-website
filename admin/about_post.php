<?php

require_once "../db.php";

$name= htmlentities($_POST['name']);
$term= htmlentities($_POST['term']);
$story= htmlentities($_POST['story']);

panda_insert("about","name,term,story","'$name','$term','$story'");

header('location: about.php');

?>