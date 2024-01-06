<?php
include("dbcon.php");

if (isset($_POST["check_btn"])) {
    $answer = $_POST["answer"];
    $query = "SELECT * FROM spanish WHERE solution LIke '$answer'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            header("Location: home.html");
            exit();
        } else {
            header("Location:wrongAnswert.php");
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
