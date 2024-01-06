<?php
include('dbcon.php');
session_start();
function sendemail_ver($name,$email,$verify_token) {

}
if(isset($_POST['submit_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_pic = $_POST['profile_pic'];
    $verify_token=md5(rand());
    
    $check_email_query ="SELECT User_Email FROM users WHERE User_Email ='$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con,$check_email_query);
    
    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status']='This Email already Exists!';
        header('Location:register.php');
    }
    else
    {
        $query = "INSERT INTO users (User_Name,User_Email,User_Pwd,User_Token,User_Pic) VALUES ('$name','$email','$password','$verify_token','$profile_pic')";
        $query_run = mysqli_query($con,$query);
        if($query_run){
        sendemail_ver("$name","$email","$verify_token");    
        $_SESSION['status']='Registration Completed!, Please Verify your Email Address';
        header('Location: home.html');
        }
        else{
        $_SESSION['status']='Registration Failed!, Please Try Again';
        header('Location:register.php');
        }
    }
}




?>