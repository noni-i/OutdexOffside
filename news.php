<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdex-Offside</title>
    <link rel="shortcut icon" type="image/x-icon" href="Icons/documnt-icon.png" />
    <link rel="stylesheet" href="style.css">
</head>
    <body style="background-color: #0C0001; zoom: 80%">
        <div class="navbar">
        <div class="world-cup-announce">
            <p>Duke Ndodhur : <a style="color: white;"  target="_blank" href="https://www.fifa.com/">Botërori 2022</a></p>
            <img id="icon-wc" src="Icons/world-cup.png">
        </div>
        <div class="top-menu">
            <div class="logo">
                <a href="index.php">
                <img src="Icons/outdex-offside-logo.png" alt="logo">
                </a>
            </div>
            
            <div class="score-icon">
                <img id="score-icon" src="Icons/score-board.png">
                <a id="Rezultatet" href="index.php">&nbsp;REZULTATET</a>
            </div>
            
            <div class="news-icon" style="background-color: rgb(24, 21, 21); height: 80px; width: fit-content; border-bottom: 5px solid darkred; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; margin-bottom: 20px;">
                <img id="news-icon" src="Icons/news.png" style="margin-left: 10px;">
                <a href="news.php" style="color: white;font-size: 24px;text-decoration: none;margin-right: 10px;">LAJME</a>
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
    
    <div class="main">
        <p>Some text some text some text some text..</p>
      </div>

    <div class="body-news">
    <div class="football-news">
        <h1 style="margin-left: 2%;">Lajmet nga bota e futbollit</h1>
        <div id="div-lajmi-par">
        <a class="lajmi-par" target="_blank" href="https://www.bavarianfootballworks.com/2022/12/18/23515244/argentina-leo-messi-world-cup-champions-bayern-munich-france-dayot-upamecano-kingsley-coman-mbappe">
            <img src="Photos/arg-wc.webp" style="width: 700px;" id="photo">
            <div style="display: flex; flex-direction: column; width: fit-content; margin-left: 1%;">
                <h style="font-size: 30px;" id="titull">Argjentina, Kampione e botës</h>
                <p style="margin-top: 2%;">Në një lojë dramatike, Argjentina shpallet<br> për herë  të tretë kampione duke fituar përmes penaltive</p>
            </div>
        </a>
    </div>
    </div>
    </div>

</body>
</html>