<?php
session_start();
if(!isset($_SESSION["authenticated"])){
    $_SESSION['status']='Please Login to Access Dashboard !';
    header("Locaion:login.php");
    exit(0);
}


?>