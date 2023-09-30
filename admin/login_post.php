<?php
session_start();
require_once "../db.php";


$email_address= $_POST['email'];
$password= md5($_POST['password']);

$count_query = "SELECT COUNT(*) AS login_capability FROM users WHERE email='$email_address' AND password='$password' ";
$after_count=mysqli_query(connect_to_db(), $count_query);
$after_assoc=mysqli_fetch_assoc($after_count);
if($after_assoc['login_capability']==1){
    $_SESSION['email_status']= true;
    $email_to_name_query= "SELECT name FROM users WHERE email='$email_address'";
    $email_to_name_after_assoc = mysqli_fetch_assoc((mysqli_query(connect_to_db(), $email_to_name_query)))['name']; 
    $_SESSION['email_to_name'] = $email_to_name_after_assoc;
    header('location: dashboard.php');
}
else{
    $_SESSION['login_error']="The user or the password is incorrect ";
    header('location: login.php');
}

?>