<?php
    $showAlert = false;
    $exists = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    include 'databaza.php';         

    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = substr($email, 0, strpos($email, '@'));
    $create_datetime = date("Y-m-d H:i:s");

    $sql = "Select * from userat where email='$email'";

    $rezultati = mysqli_query($con, $sql);

    $rreshtat = mysqli_num_rows($rezultati);

    if($rreshtat == 0){
        if($exists==false){
        
        $sql = "INSERT into `userat` (username, password, email, datakrijimit)
                VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";

        $rezultati = mysqli_query($con, $sql);
        if ($rezultati) {
            $showAlert = true; 
        }
    }
}      

    if($rreshtat>0) 
    {
        $exists="Emaili është përdorur"; 
    }
}
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
            
            <div class="news-icon">
                <img id="news-icon" src="Icons/news.png">
                <a id="Lajmet" href="news.php">LAJME</a>
            </div>
    
            <div class="red-stroke">
                <img src="Icons/stroke.png">
            </div>
    
            <div class="login-class">
                <img id="user-icon" src="Icons/user.png">
                <a id="login-href" href="login.php">KYCU</a>
            </div>
            
        </div>
</div>

<div class="main">
    <p>Some text some text some text some text..</p>
  </div>
  <?php
    
    if($showAlert) {
    
        echo "<script>alert('Sukses! Llogaria juaj eshte krijuar dhe ju mund te kyqeni.');</script>";       
    }
        
    if($exists) {
        echo "<script>alert('$exists');</script>";  
     }
   
?>
 
        <div class="bodylogin">
            <div class="login">
                <h style="font-size: 30px; padding-top: 30px; margin-bottom: 10px;">Krijoni llogarinë tuaj</h>
                <p>Përdorni njërin nga aplikacionet e mëposhtme për tu regjistruar ne OutdexOffside.</p>
                <button class="button-signup" onclick="location.href='workprogress.html'">
                    <div class="buttoniconplustext">
                    <svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18C0 8.059 8.059 0 18 0s18 8.059 18 18-8.059 18-18 18S0 27.941 0 18Z" fill="#fff"></path><path d="M19.876 28.584V18.79h2.703l.358-3.375h-3.061l.005-1.69c0-.88.083-1.35 1.347-1.35h1.69V9h-2.703c-3.248 0-4.39 1.637-4.39 4.39v2.026H13.8v3.375h2.024v9.793h4.052Z" fill="#3B5998"></path></svg><span style="margin-left: 10px;">Vazhdoni në Facebook</span>
                    </div>
                </button>
                <button class="button-signup" onclick="location.href='workprogress.html'">
                    <div class="buttoniconplustext">
                        <svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18C0 8.059 8.059 0 18 0s18 8.059 18 18-8.059 18-18 18S0 27.941 0 18Z" fill="#fff"></path><path d="M18 13.215c1.465 0 2.453.633 3.016 1.162l2.202-2.15C21.866 10.971 20.106 10.2 18 10.2a7.794 7.794 0 0 0-6.968 4.299l2.522 1.959c.633-1.881 2.384-3.242 4.446-3.242Z" fill="#EA4335"></path><path d="M25.488 18.173c0-.641-.052-1.11-.165-1.595H18v2.895h4.299c-.087.72-.555 1.803-1.595 2.53l2.461 1.907c1.474-1.36 2.323-3.363 2.323-5.737Z" fill="#4285F4"></path><path d="M13.563 19.542a4.8 4.8 0 0 1-.26-1.543c0-.537.095-1.057.251-1.542l-2.522-1.959a7.807 7.807 0 0 0-.832 3.501c0 1.257.304 2.444.832 3.502l2.53-1.959Z" fill="#FBBC05"></path><path d="M18 25.8c2.106 0 3.874-.693 5.166-1.889l-2.462-1.907c-.658.46-1.542.78-2.704.78-2.062 0-3.813-1.36-4.437-3.241l-2.522 1.959c1.283 2.548 3.909 4.298 6.96 4.298Z" fill="#34A853"></path></svg></path></svg><span style="margin-left: 10px;">Vazhdoni në Google</span>
                    </div>
                </button>
                <button class="button-signup" onclick="location.href='workprogress.html'">
                    <div class="buttoniconplustext">
                        <svg width="36" height="36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 18C0 8.059 8.059 0 18 0s18 8.059 18 18-8.059 18-18 18S0 27.941 0 18Z" fill="#fff"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M21.95 7.2c.189 1.28-.332 2.534-1.02 3.421-.735.952-2.003 1.688-3.23 1.65-.225-1.226.35-2.489 1.048-3.337.766-.937 2.079-1.656 3.202-1.734Zm3.689 18.017c.633-.97.87-1.46 1.361-2.555-3.574-1.36-4.147-6.441-.61-8.391-1.079-1.354-2.595-2.138-4.026-2.138-1.031 0-1.738.27-2.38.514-.535.204-1.026.39-1.623.39-.645 0-1.216-.204-1.814-.419-.657-.235-1.347-.482-2.202-.482-1.606 0-3.316.98-4.4 2.659-1.523 2.362-1.264 6.805 1.207 10.589.883 1.354 2.063 2.876 3.607 2.89.64.006 1.066-.186 1.527-.392.528-.237 1.102-.494 2.095-.5.999-.006 1.564.255 2.084.495.45.207.866.4 1.501.393 1.545-.013 2.79-1.7 3.673-3.053Z" fill="#1A1A24"></path></svg><span style="margin-left: 10px;">Vazhdoni në Apple</span>
                    </div>
                </button>

                <div class="osedivider"><hr class="leftline"><p style="color: gray;">apo</p><hr class="rightline"></div>
                <form action="signup.php" method="post">
                <div class="email">
                    <p style="text-align: left; margin: 5px 0px 5px 0px;">Email i juaj</p>
                    <input class="input" type="email" name="email" autocomplete="on" id="emailfield" onkeydown="ValidateEmail()">
                    <div style="text-align: left; margin-top: 10px;">
                        <strong id="strong-email">Ju lutem shkruani një email adresë valide</strong>
                    </div>
                </div>
                <div class="password">
                    <p style="text-align: left; margin: 30px 0px 5px 0px;">Passwordi juaj</p>
                    <input class="input" type="password" name="password" autocomplete="on" id="passwordfield" onkeydown="ValidatePassword()">
                    <div style="text-align: left; margin-top: 10px;">
                        <strong id="strong-password">Passwordi juaj duhet të ketë të paktën 8 karakter, një shkronjë të madhe dhe një numër</strong>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="showpassword" onclick="showPswd()">
                        <p style="margin-left: 10px">Shfaq passwordin</p>
                    </div>
                </div>
                <div class="osedivider">
                    <hr class="divider">
                </div>
                <div class="checkbox2">
                    <input type="checkbox" name="termscondition" id="myCheckbox" onchange="unlockButton()">
                        <p style="text-align: left; margin-left: 10px; justify-self: center;">Unë pranoj Termet dhe Kushtet dhe kam lexuar Politikën <br> e Privatësisë.</p>
                </div>
                
                    <button class="button-signup-final" type="submit">  
                        Krijoni llogarinë
                    </button>
                    </form>     

                    
                <strong style="margin-top: 30px; margin-bottom: 30px;">Keni llogari?<a href="login.html" style="color: white; margin-left: 5px;">Kyçu</a></strong>
            </div>
        </div>

        <script src="script.js"></script>
</body>
</html>