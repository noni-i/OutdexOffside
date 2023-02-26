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
      <div class="body-artikulli">
        <h1 style="color: white;font-family: Britanica; justify-self:center; justify-content:center;">hello</h1>
        <img src="Photos/arg-wc.webp" style="margin-top: 10px; width:fit-content; border-radius:10px;">
        <div class="futboll-lajm">
            <h1 style="font-size:40px">Bacaj</h1>
            <p>Bavarezët i dhanë fund dyshimit për fituesin duke i realizuar tre golat që në pjesën e parë.

Eric Maxim Choupo-Moting ishte i pari që shënoi duke e zhbllokuar rezultatin (31’) pas asistimit nga Kingsley Coman.


(Foto: Twitter/FC Bayern Munich)

Në golin e dytë (40’), Coman ishte në cilësinë e realizuesit, derisa Thomas Muller e dhuroi asistimin.

Vendasit e shënuan edhe golin e tretë në fund të pjesës së parë (45’+1) përmes Jamal Musiala. Emri i asistuesit ishte i njëjtë, Thomas Muller.</p>
            
        </div>
        <div class="osedivider" style="width: 1000px;">
                    <hr class="divider" style="background-color:white">
                </div>
        <p style="color: gray;">Autori</p>
        </div>            
      </div>
    
</body>
</html>