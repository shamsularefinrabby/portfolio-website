<?php

session_start();
$flag=true;
require_once "../db.php";


if (!$_POST['name']) {
    $_SESSION['name_error'] = "Name field must required";
    $flag=false;
}else{
    $_SESSION['old_name']= $_POST['name'];
}

if (!$_POST['email']) {
    $_SESSION['email_error'] = "Email field must required";
    $flag=false;
}
else{
    $_SESSION['old_email']= $_POST['email'];
}
if (!$_POST['password']) {
    $_SESSION['password_error'] = "Password field must required";
    $flag=false;
}
if (!$_POST['confirm_password']) {
    $_SESSION['confirm_password_error'] = "Confirm Password field must required";
    $flag=false;
}
else{
    if ($_POST['password'] != $_POST['confirm_password']) {
        $_SESSION['password_match_error']= "Password didnot match ";
        $flag=false;
    }
}

if(!isset($_POST['gender'])){
    $_SESSION['gender_error'] = "Gender button is not selected";
    $flag=false;
}
else{
    $_SESSION['old_gender']= ($_POST['gender']);

}
if($flag){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $gender=$_POST['gender'];


    $email_check_query="SELECT COUNT(*) AS email_match_error FROM users WHERE email='$email'";
    $after_check= mysqli_query(connect_to_db(), $email_check_query);
    $after_assoc= mysqli_fetch_assoc($after_check);
    if($after_assoc['email_match_error'] == 1){
        $_SESSION['email_match_error'] = "email already taken";
        header('location: register.php');
    }
    else{
         
    date_default_timezone_set('Asia/dhaka');
    $current_time_date = date('Y-m-d h:i:s');
    
    $insert_query="INSERT INTO users(name,email,password,gender,created_at) values('$name','$email','$password','$gender','$current_time_date')";
    $db_query=mysqli_query(connect_to_db(),$insert_query);
    
    $_SESSION['success_msg']= "you are successfully registered";
    $_SESSION['email_address']= $_POST['email'];
    header('location: login.php');

    }
   
}
else{
    header('location: register.php');
}

?>