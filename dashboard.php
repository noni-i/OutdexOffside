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

    $sql = "SELECT * FROM lajmi";

    $query = mysqli_query($con, $sql);

    $rows = mysqli_num_rows($query);

    $sql1 = "SELECT * FROM rezultatet";

    $query1 = mysqli_query($con, $sql1);

    $rows1 = mysqli_num_rows($query1);

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
            <div style="width: 1920px; height: 797px; display: flex; flex-direction:row;">
                <div class="dashboard-menu">
                    <a class="menu-dash" href="dashboard.php">DASHBOARD</a>
                    <a class="menu-dash" href="dashboard-lajmet.php">LAJMET</a>
                    <a class="menu-dash" href="dashboard-rezultatet.php">REZULTATET</a>
                </div>
                <div class="dashboard-windows">
                    <div class="dash-window">
                        <p style="padding-left: 40px; font-family: Britanica; font-size: 32px; height:fit-content;">Numri i lajmeve:</p>
                        <p style="padding-left: 40px; font-family: Britanica; font-size: 64px; height:fit-content; margin-top: 0px;"><?php echo $rows ?></p>
                        <a href="dashboard-lajmet.php" class="view-more">Shiko më shumë</a>
                    </div>
                    <div class="dash-window">
                        <p style="padding-left: 40px; font-family: Britanica; font-size: 32px; height:fit-content;">Numri i rezultateve:</p>
                        <p style="padding-left: 40px; font-family: Britanica; font-size: 64px; height:fit-content; margin-top: 0px;"><?php echo $rows1 ?></p>
                        <a href="dashboard-rezultatet.php" class="view-more">Shiko më shumë</a>  
                      </div>
                </div>
            </div>
    
        
    <script src="script.js"></script>
</body>
</html>