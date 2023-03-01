<?php
session_start();

    

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["admin"] == false){
            header("location: index.php");
        }

        require "databaza.php";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $vendasi = ($_REQUEST['vendasi']);
            $mysafiri = ($_REQUEST['mysafiri']);
            $orari = ($_REQUEST['orari']);
            $rezultati = ($_REQUEST['rezultati']);
            $liga = ($_REQUEST['liga']);

                $sql = "INSERT into `rezultatet` (ekipi_vendas, ekipi_mysafir, orari, rezultati, liga)
                VALUES ('$vendasi', '$mysafiri', '$orari', '$rezultati', '$liga')";

                $query = mysqli_query($con, $sql);

                echo "<script>alert('U shtua');</script>";
                header("location: dashboard-rezultatet.php");

        }

} else {
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shto lajmin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #0C0001; zoom: 80%">
    <div style="display:flex; align-items:center; justify-content:center;">
    <div class="forma-ndeshjes">
    <form action="insert-ndeshje.php" method="post">
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 10px 5px 0px;">Vendasi</p>
                <input class="input" type="text" name="vendasi">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Mysafiri</p>
                <input class="input" type="text" name="mysafiri">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Orari</p>
                <input class="input" type="datetime-local" name="orari">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Rezultati</p>
                <input class="input" type="text" name="rezultati">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Liga</p>
                <input class="input" type="text" name="liga">
            </div>
            <button class="button-signup" id="bttn" style="width:150px; margin-top: 32px;">  
                Shto
            </button>
    </form>
    </div>
    </div>
    </body>
    </html>