<?php
session_start();



    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

        if($_SESSION["admin"] == false){
            header("location: index.php");
        }

        require "databaza.php";

        $id=($_GET['id']);

        $query = mysqli_query($con,"SELECT * FROM lajmi WHERE lajmi_id=$id");

        $rows = mysqli_fetch_assoc($query);
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $id=($_GET['id']);
            
            $autori = $_SESSION["username"];
    
            $titulli = ($_REQUEST['titulli']);
            $foto = ($_REQUEST['foto']);
            $lajmi = ($_REQUEST['permbajtja']);
    
            $sql = "SELECT * FROM lajmi WHERE lajmi_id=$id";
    
            $rezultati = mysqli_query($con, $sql);
    
            $rreshtat = mysqli_num_rows($rezultati);
    
            if($rreshtat == 1){
                $sql = "UPDATE lajmi SET lajmi_titull ='$titulli', lajmi_foto ='$foto', lajmi_permbajtja='$lajmi' WHERE lajmi_id='$id'" ;
    
                $rezultati = mysqli_query($con, $sql);
    
                echo "<script>alert('U ndryshua');</script>";
                header("location: dashboard-lajmet.php");
    
            } else {
                header("location: index.php");
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
    <form action="edit-lajm.php?id=<?php echo $id ?>" method="post">
        <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Titulli</p>
                <input class="input" type="text" name="titulli" value="<?php echo $rows['lajmi_titull'] ?>">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Path i fotos</p>
                <input class="input" type="text" name="foto" value="<?php echo $rows['lajmi_foto'] ?>">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Permbajtja</p>
                <textarea class="input" style="height: 500px; text-decoration:none;" name="permbajtja" spellcheck="false"><?php echo $rows['lajmi_permbajtja'] ?></textarea>
            </div>
            <button class="button-signup" id="bttn" style="width:550px; margin-top: 20px;">  
                Redakto
            </button>
    </form>
    </div>
    </div>
    </body>
    </html>