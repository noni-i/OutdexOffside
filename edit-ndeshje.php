<?php
session_start();



    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["admin"] == false){
            header("location: index.php");
        }

        require "databaza.php";

        require "databaza.php";

        $id=($_GET['id']);

        $query = mysqli_query($con,"SELECT * FROM rezultatet WHERE rez_id='$id'");

        $rows = mysqli_fetch_assoc($query);

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $vendasi = ($_REQUEST['vendasi']);
            $mysafiri = ($_REQUEST['mysafiri']);
            $orari = ($_REQUEST['orari']);
            $rezultati = ($_REQUEST['rezultati']);
            $liga = ($_REQUEST['liga']);

                $sql = "UPDATE rezultatet SET ekipi_vendas='$vendasi', ekipi_mysafir='$mysafiri', orari='$orari', rezultati='$rezultati', liga='$liga' WHERE rez_id='$id'";

                $query = mysqli_query($con, $sql);

                echo "<script>alert('U ndryshua');</script>";
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
        <title>Edito ndeshjen</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #0C0001; zoom: 80%">
    <div style="display:flex; align-items:center; justify-content:center;">
    <div class="forma-ndeshjes">
    <form action="edit-ndeshje.php?id=<?php echo $id ?>" method="post">
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 10px 5px 0px;">Vendasi</p>
                <input class="input" type="text" name="vendasi" value='<?php echo $rows['ekipi_vendas'] ?>'>
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Mysafiri</p>
                <input class="input" type="text" name="mysafiri" value="<?php echo $rows['ekipi_mysafir'] ?>">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Orari</p>
                <input class="input" type="datetime-local" name="orari" value="<?php echo $rows['orari'] ?>">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Rezultati</p>
                <input class="input" type="text" name="rezultati" value="<?php echo $rows['rezultati'] ?>">
            </div>
            <div class="password" style="margin-right: 10px;">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Liga</p>
                <input class="input" type="text" name="liga" value="<?php echo $rows['liga'] ?>">
            </div>
            <button class="button-signup" id="bttn" style="width:150px; margin-top: 32px;">  
                Ndërro
            </button>
    </form>
    </div>
    </div>
    </body>
    </html>