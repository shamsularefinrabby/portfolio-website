<?php

require_once "../db.php";

$project_name= $_POST['project_name'];
$clients= $_POST['clients'];
$completion= $_POST['completion'];
$project_type= $_POST['project_type'];
$author= $_POST['author'];
$budget= $_POST['budget'];
$branding= htmlentities($_POST['branding']);

$image_name = $_FILES['project_image'];
$inside_image_name = $image_name['name'];
$after_explode =explode(".",$inside_image_name);
$image_new_name= rand().time(). ".". end($after_explode);
$temp_location= $image_name['tmp_name'];
$new_location= "../img/portfolio/$image_new_name";
move_uploaded_file($temp_location, $new_location);

if($project_name && $image_new_name && $clients && $completion && $project_type && $author && $budget && $branding){
    panda_insert("projects","project_name,project_image,clients,completion,project_type,author,budget,branding","'$project_name','$image_new_name','$clients','$completion','$project_type','$author','$budget','$branding'");
    

    header('location: projects.php');
}
else{
    header('location: projects.php');
    
}

?>




