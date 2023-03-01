<?php
session_start();



    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["admin"] == false){
            header("location: index.php");
        }

        require "databaza.php";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $autori = $_SESSION["username"];

            $titulli = ($_REQUEST['titulli']);
            $foto = ($_REQUEST['foto']);
            $lajmi = ($_REQUEST['permbajtja']);
            $create_datetime = date("Y-m-d H:i:s");

            $sql = "Select * from lajmi where lajmi_titull='$titulli'";

            $rezultati = mysqli_query($con, $sql);

            $rreshtat = mysqli_num_rows($rezultati);

            if($rreshtat == 0){
                $sql = "INSERT into `lajmi` (lajmi_titull, lajmi_permbajtja, autori, datapostimit, lajmi_foto)
                VALUES ('$titulli', ' $lajmi', '$autori', '$create_datetime', '$foto')";

                $rezultati = mysqli_query($con, $sql);

                echo "<script>alert('U shtua');</script>";
                header("location: dashboard-lajmet.php");

            } else {
                echo "<script>alert('Lajmi ekziston. Provo perseri');</script>";
                header("location: insert.php");
            }

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
    <div class="bodylogin">
    <div class="login">
    <form action="insert-lajm.php" method="post">
        <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Titulli</p>
                <input class="input" type="text" name="titulli">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Path i fotos</p>
                <input class="input" type="text" name="foto">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Permbajtja</p>
                <textarea class="input" style="height: 500px; text-decoration:none;" name="permbajtja" spellcheck="false"></textarea>
            </div>
            <button class="button-signup" id="bttn" style="width:550px; margin-top: 20px;">  
                Shto
            </button>
    </form>
    </div>
    </div>
    </body>
    </html>