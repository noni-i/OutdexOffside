<?php
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
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
    <div class="navbar">
    <div class="world-cup-announce">
        <p>Duke Ndodhur : <a target="_blank" href="https://www.fifa.com/" id="botrori">Botërori 2022</a></p>
        <img id="icon-wc" src="Icons/world-cup.png">
    </div>
    <div class="top-menu">
        <div class="logo">
            <a href="index.php">
            <img src="Icons/outdex-offside-logo.png" alt="logo">
            </a>
        </div>
        
        <div class="score-icon">
            <img id="score-icon" src="Icons/score-board.png" style="margin-left: 15px;">
            <a href="index.php" style="color: white;font-size: 24px;text-decoration: none;margin-right: 15px;">&nbsp;REZULTATET</a>
        </div>
        
        <div class="news-icon">
            <img id="news-icon" src="Icons/news.png">
            <a id="Lajmet" href="news.php">LAJME</a>
        </div>

        <div class="red-stroke">
            <img src="Icons/stroke.png">
        </div>

        <?php

            if(isset($_SESSION["admin"]) and ($_SESSION["admin"])){
                echo '<div class="login-class">
                <a style="color: white;" href="dashboard.php">DASHBOARD</a>
                </div>';
            }

            if($_SESSION["loggedin"] == false){
                echo '<div class="login-class">
                <img id="user-icon" src="Icons/user.png">
                <a id="login-href" href="login.php">KYCU</a>
                </div>';
            } else {
                $username = $_SESSION["username"];
                echo '<div class="login-class" style="background-color: rgb(24, 21, 21); height: 80px; width: fit-content; border-bottom: 5px solid darkred; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; margin-bottom: 20px; padding-left: 5px; padding-right: 5px;">
                <a id="login-href" href="user.php">'.$username.'</a>
                </div>';
            } 

        ?>



        
        
    </div>
</div>


<div class="main">
        <p>Some text some text some text some text..</p>
      </div>
      <div class="bodylogin">
        <div class="login">
            <h style="font-size: 30px; padding-top: 30px; margin-bottom: 10px;">Ndrysho llogarinë tuaj</h>
            <p>Selekto opsionin qe doni ta ndryshoni.</p>
            <form action="change-password.php">
            <button class="button-signup" onclick="location.href='workprogress.html'" style="margin-top: 50px; height: 80px; width:550px;">
                    <div class="buttoniconplustext" style="padding-left: 30%;">
                    <img title="padlock" src="Icons/padlock.png" style="height: 24px;"><span style="margin-left: 10px;">Ndrysho passwordin</span>
                    </div>
                </button>
            </form>
            <form action="delete-account.php">
                <button class="button-signup" onclick="location.href='workprogress.html'" style="margin-top: 5px; height: 80px; width: 550px; ">
                    <div class="buttoniconplustext" style="padding-left: 35%;"s>
                    <img alt="" decoding="async" srcset="https://image-service.onefootball.com/transform?w=32&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/warning-white.svg 1x, https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/warning-white.svg 2x" src="https://image-service.onefootball.com/transform?w=48&amp;dpr=2&amp;image=https://images.onefootball.com/cw/icons/warning-white.svg" width="24" height="24" data-nimg="1" loading="lazy" style="color: transparent;"><span style="margin-left: 10px;">Fshij llogarinë</span>
                    </div>
                </button>  
            </form>  
                <form action="logout.php">
                <button class="button-signup" id="bttn-shkyqu" style="margin-top: 50px; background-color: darkslategray; width:550px;" type="submit" >  
                Shkyçu
                </button>
                </form>
        </div>
      </div>

</body>
</html>
<?php
    }else{
        header("location: index.php");
        exit;
    }
?>