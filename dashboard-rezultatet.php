<?php
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        if($_SESSION["admin"] == false){
            header("location: index.php");
        }
    }else{
        header("location: index.php");
        exit;
    }

    require "databaza.php";

    $query= mysqli_query($con,"SELECT * FROM rezultatet")
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdex-Offside</title>
    <link rel="shortcut icon" type="image/x-icon" href="Icons/documnt-icon.png" />
    <link rel="stylesheet" href="style.css">
    <style>
        html, body{
            min-height: 100%;
            height: 100%;
        }
    </style>
</head>
<body style="background-color: #0C0001; zoom: 80%; margin-left:0%; margin-bottom:0%;">
    <div class="navbar" style="margin-bottom: 0;">
    <div class="top-menu">
        <div class="logo">
            <a href="index.php">
            <img src="Icons/outdex-offside-logo.png" alt="logo">
            </a>
        </div>

        <div class="red-stroke">
            <img src="Icons/stroke.png">
        </div>

        <?php
            

            
            if(empty($_SESSION["loggedin"])){
                echo '<div class="login-class">
                <img id="user-icon" src="Icons/user.png">
                <a id="login-href" href="login.php">KYCU</a>
                </div>';
            } else {
                $username = $_SESSION["username"];
                echo '<div class="login-class">
                <a id="login-href" href="user.php">'.$username.'</a>
                </div>';
            }

        ?>



        
        
    </div>
</div>

<div class="main" style="margin-top:100px;">
  </div>
            <div style="width: 1920px; height: 100vh; display: flex; flex-direction:row;">
                <div class="dashboard-menu" style="height: 500vh;">
                    <a class="menu-dash" href="dashboard.php">DASHBOARD</a>
                    <a class="menu-dash" href="dashboard-lajmet.php">LAJMET</a>
                    <a class="menu-dash" href="dashboard-rezultatet.php">REZULTATET</a>
                </div>
                <div class="dashboard-windows">
                    <div style="align-self: flex-start; display: flex; flex-direction:column; justify-content:center; align-items:center;">
            
                        <h1 style="color:white; font-family:Britanica;">Shto ndeshje të re</h1>
                        <a href="insert-ndeshje.php"><button class="button-signup" style="width: 400px; margin-bottom: 20px;">Regjistro</button></a>

                        <hr style="width:1200px;">
                        
                        <p style="color:white; font-family:Britanica; font-size: 20pt;">Lista e ndeshjeve:</p>
                            
                        <table style="width: 1200px; text-align:left;">
                            <tr style="background-color: gray;">
                                <th style="color:white; font-family:Britanica; font-size: 28px; width: 10%">Orari</th>
                                <th style="color:white; font-family:Britanica; font-size: 28px; border-bottom: 2px white; width: 25%">Vendasi</th>
                                <th style="color:white; font-family:Britanica; font-size: 28px; width: 5%">Rezultati</th>
                                <th style="color:white; font-family:Britanica; font-size: 28px; border-bottom: 2px white; width: 25%">Mysafiri</th>
                                <th style="color:white; font-family:Britanica; font-size: 28px; width:15%">Liga</th>
                                <th style="color:white; font-family:Britanica; text-align: right; font-size: 28px; width: 20%">Editimi</th>
                            </tr>
                            <?php
                                while($rows = mysqli_fetch_assoc($query)){ ?>
                                <tr>
                                <td style="color:white; font-family:Britanica; font-size: 28px;"><?php echo $rows['orari'];?> </td>
                                <td style="color:white; font-family:Britanica; font-size: 28px;"><?php echo $rows['ekipi_vendas'];?> </td>
                                <td style="color:white; font-family:Britanica; font-size: 28px;"><?php echo $rows['rezultati'];?> </td>
                                <td style="color:white; font-family:Britanica; font-size: 28px;"><?php echo $rows['ekipi_mysafir'];?> </td>
                                <td style="color:white; font-family:Britanica; font-size: 28px;"><?php echo $rows['liga'];?> </td>
                                <td style="color:white; font-family:Britanica; text-align: right; font-size: 28px;">
                                    <a href="edit-ndeshje.php?id=<?php echo $rows['rez_id']?>"><button class="button-signup" style="width: 45%;" >Redakto</button></a>
                                    <a href="delete-ndeshje.php?id=<?php echo $rows['rez_id']?>" style="font-size: 0px;">"<button class="button-signup" style="width: 45%;" >Fshij</button></a>
                                </td>
                                </tr>
                                <?php }                                
                            ?>

                              
                            
                            
                        </table>    
                        <div>
                </div>
    
</body>
</html>