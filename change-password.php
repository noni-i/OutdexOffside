<?php
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        
        require_once "databaza.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_SESSION["username"];

        $oldpass = ($_REQUEST['oldpassword']);
        $newpassword = ($_REQUEST['newpassword']);
        $newpasscon = ($_REQUEST['connnewpassword']);

        $query    = "SELECT * FROM `userat` WHERE username='$username' AND password='" . md5($oldpass) . "'";
        $rezultati = mysqli_query($con, $query);
        $rreshtat = mysqli_num_rows($rezultati);

        $hashpass = md5($newpassword);

        if($rreshtat == 1){
            if($newpassword == $newpasscon){
                $sql = "UPDATE userat SET password = '$hashpass' WHERE username='$username'";
                $change = mysqli_query($con, $sql);
                echo "<script>alert('Passwordi është plotsuar gabim. Provo përsëri');</script>";
                header("location: index.php");
                exit;
            } else {
                echo "<script>alert('Passwordi është plotsuar gabim. Provo përsëri');</script>";
            }
        } else {
            echo "<script>alert('Passwordi është plotsuar gabim. 1');</script>";
        }


    }


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #0C0001; zoom: 80%">
    <div class="bodylogin">
    <div class="login">
    <form action="change-password.php" method="post">
        <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Passwordi i vjetër</p>
                <input class="input" type="password" name="oldpassword" autocomplete="on" id="passwordfield">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Passwordi i ri</p>
                <input class="input" type="password" name="newpassword" autocomplete="on" id="passwordfield">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Konfirmo passwordin e ri</p>
                <input class="input" type="password" name="connnewpassword" autocomplete="on" id="passwordfield">
            </div>
            <button class="button-signup" id="bttn" style="width:550px; margin-top: 20px;">  
                Ndërro
            </button>
    </form>
    </div>
    </div>
    </body>
    </html>



<?php

    } else {
        header("location: login.php");
        exit;
    }

?>