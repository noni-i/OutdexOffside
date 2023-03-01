<?php
    session_start();

    require "databaza.php";

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["admin"] == false){
            header("location: index.php");
        }

        $id = $_GET['id'];

        $sql = "DELETE FROM lajmi WHERE lajmi_id='$id'";

        $rezultati = mysqli_query($con, $sql);

        header("location: dashboard-lajmet.php");

    } else {
    header("location: index.php");
    exit;
}
?>