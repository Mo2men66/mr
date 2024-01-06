<?php
include("dbcon.php");
if(isset($_POST["submit_update"]))
{   $email = $_POST["email"];
    $old_password = $_POST["old_pass"];
    $new_password = $_POST["new_pass"];
    $query="UPDATE users SET User_Pwd ='$new_password' Where  User_Pwd ='$old_password' and User_Email = '$email'";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        header("location:home.html");
    }
}
else
{

}


?>