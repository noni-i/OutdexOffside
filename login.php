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
                
                <div class="news-icon">
                    <img id="news-icon" src="Icons/news.png">
                    <a id="Lajmet" href="news.php">LAJME</a>
                </div>
        
                <div class="red-stroke">
                    <img src="Icons/stroke.png">
                </div>
        
                <div class="login-class" style="background-color: rgb(24, 21, 21); height: 80px; width: fit-content; border-bottom: 5px solid darkred; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; margin-bottom: 20px;">
                    <img id="user-icon" src="Icons/user.png" style="margin-left: 10px;">
                    <a id="login-href" href="login.html" style="color: white; font-size: 24px; text-decoration: none;margin-right: 10px;">KYCU</a>
                </div>
                
            </div>
    </div>
    
    <div class="main">
        <p>Some text some text some text some text..</p>
      </div>
      <div class="bodylogin">
        <div class="login">
            <h style="font-size: 30px; padding-top: 30px; margin-bottom: 10px;">Kyçuni</h>
            
            <div class="email">
                <p style="text-align: left; margin: 5px 0px 5px 0px;">Email i juaj</p>
                <input class="input" type="email" name="email" autocomplete="on" id="emailfield" onkeydown="ValidateEmail()">
            </div>
            <div class="password">
                <p style="text-align: left; margin: 30px 0px 5px 0px;">Passwordi juaj</p>
                <input class="input" type="password" name="password" autocomplete="on" id="passwordfield" onkeydown="ValidatePassword()">
                <div style="text-align: left; margin-top: 10px;">
                    <strong ><a href="workprogress.html" style="color: white;">Keni harruar passwordin?</a></strong>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="showpassword" onclick="showPswd()">
                    <p style="margin-left: 10px">Shfaq passwordin</p>
                </div>
            </div>
            <button class="button-signup" id="bttn" onclick="loginvalid(document.getElementById('emailfield').value, document.getElementById('passwordfield').value)">  
                Kyçu
            </button>
            <strong style="margin-top: 30px; margin-bottom: 30px;">Nuk keni llogari?<a href="signup.php" style="color: white; margin-left: 5px;">Regjistrohu</a></strong>
        </div>
    </div>

    <script src="script-login.js"></script>

</body>
</html>