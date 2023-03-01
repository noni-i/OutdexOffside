<?php
    session_start();

    require "databaza.php";

    $query= mysqli_query($con,"SELECT * FROM lajmi");
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
        <div class="navbar" style="z-index: 3;">
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
            
            if(isset($_SESSION["admin"]) and ($_SESSION["admin"])){
                echo '<div class="login-class">
                <a style="color: white;" href="dashboard.php">DASHBOARD</a>
                </div>';
            }
            
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
            <div class="lista-lajmet">
              <?php include "slidet.php" ?>
                <?php
                    while($rows = mysqli_fetch_assoc($query)){ ?>
                      <a href="artikulli.php?id=<?php echo $rows['lajmi_id']?>">
                      <div class="lajm">
                      <img class="fotot-lajmet" style="width: 300px;" src="<?php echo $rows['lajmi_foto']; ?>">
                      <p class="titujt-lajmet"><?php echo $rows['lajmi_titull']; ?></p>
                      </div>
                      </a>
                    <?php }
                ?>
            </div>
    </div>
    </div>


    <script></script>
      
</body>
</html>