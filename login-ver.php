<?php
session_start();
include("dbcon.php");
if (isset($_POST["login_now_btn"])) {
    if(!empty(trim($_POST['email']))&&!empty(trim($_POST['password']))) {
        $email =mysqli_escape_string($con,$_POST['email']);
        $password =mysqli_escape_string($con,$_POST['password']);
        $login_query="SELECT * From users Where User_Email='$email' AND User_Pwd ='$password'";
        $login_query_run= mysqli_query($con,$login_query);
        if(mysqli_num_rows($login_query_run)> 0) {
            header("location:dashboard.php");
            exit(0);
        }
        else {
            $_SESSION["status"] = "Invalid Email or Password";
            header("location: login.php");
            exit(0);
        }
    }
    else{
        $_SESSION["satuts"] = "All Fields are Mandatory";
        header("location: login.php");
    }


}
?>