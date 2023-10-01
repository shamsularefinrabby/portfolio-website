<?php

require_once "../db.php";

$fname= htmlentities($_POST['fname']);
$term= htmlentities($_POST['term']);
$story= htmlentities($_POST['story']);

panda_insert("about", "fname,term,story","$fname, $term,$story");
header('location: about.php');

?>