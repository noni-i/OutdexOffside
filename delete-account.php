<?php
    session_start();


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        include_once "databaza.php";
        $username = $_SESSION["username"];
        $sql = "DELETE from userat WHERE username='$username'";
        $change = mysqli_query($con, $sql);
        session_destroy();
        header("location: index.php");
        exit;
    }else{
        header("location: index.php");
        exit;
    }
?>