<?php
include("dbcon.php");
if(isset($_GET['token'])){
    $token =$_GET['token'];
    $verify_query ="SELECT User_Token FROM users WHERE User_Token = '$token'LIMIT 1";
    $verify_query_run = mysqli_query($con,$verify_query);
    
    if(mysqli_num_rows($verify_query_run)>0){
        $row = mysqli_fetch_array($verify_query_run);
        if($row("verify_status"=="0")){

        }
        else{

        }
    }
    else{
        $_SESSION=['status']="This Token does not Exist";
        header("Location:");
    }
}else{
    $_SESSION['status'] = "Not allowed";
    header("Location: login.php"); 
}

?>