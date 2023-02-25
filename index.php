<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdex-Offside</title>
    <link rel="shortcut icon" type="image/x-icon" href="Icons/documnt-icon.png" />
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        
        <div class="score-icon"  style="background-color: rgb(24, 21, 21); height: 80px; width: fit-content; border-bottom: 5px solid darkred; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; margin-bottom: 20px;">
            <img id="score-icon" src="Icons/score-board.png" style="margin-left: 15px;">
            <a href="index.php" style="color: white;font-size: 24px;text-decoration: none;margin-right: 15px;">&nbsp;REZULTATET</a>
        </div>
        
        <div class="news-icon">
            <img id="news-icon" src="Icons/news.png">
            <a id="Lajmet" href="news.html">LAJME</a>
        </div>

        <div class="red-stroke">
            <img src="Icons/stroke.png">
        </div>

        <div class="login-class">
            <img id="user-icon" src="Icons/user.png">
            <a id="login-href" href="login.html">KYCU</a>
        </div>
        
    </div>
</div>

<div class="main">
    <p>Some text some text some text some text..</p>
  </div>

    <div class="body">
        <div class="scores-table">
            <ul style="padding-left: 0%;" list-style-type="none">
                <li id="list-data">
                    
                    <div class="date">
                        <ul style="padding-left: 6%;" list-style-type="none">
                        <h1 id="month-header">Ndeshjet e sotme</h1>
                        <p1 id="score-date"></p1>
                        </ul>
                        <div class="data-majtas">
                            <!--<button class="date-arrow-button" type="button"><img class="arrow-buttons" src="Icons/left-arrow.png"></button>-->
                            
                            <input type="text" id="datepicker">
                            <img src="Icons/calendar.png" id="calendar-icon">
                            <!--<button class="date-arrow-button" type="button"><img class="arrow-buttons" src="Icons/right-arrow.png"></button>-->
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="ligat">
                            <img src="Icons/eng.png" class="table-icons">
                            <p1 class="tableleagues">Premier League</p1>
                    </div>
                
                </li>
                <li>
                    <div class="matches" id="plmatches"></div>
                </li>
                <li>
                    <div class="ligat">
                            <img src="Icons/int.png" class="table-icons">
                            <p1 class="tableleagues">World Cup</p1>
                    </div>
                </li>
                <li>
                    <div class="matches" id="wcmatches"></div>
                </li>
                <li>
                    <div class="ligat">
                            <img src="Icons/esp.png" class="table-icons">
                            <p1 class="tableleagues">LaLiga</p1>
                    </div>
                </li>
                <li>
                    <div class="matches" id="esmatches"></div>
                </li>
                <li>
                    <div class="matches" id="nomatches"></div>
                </li>
            </ul>
        </div>

        <div class="top-leagues">
            <h1 id="topleagues">Ligat kryesore</h1>

            <div class="league-href">
                <ul>
                    <li>
                        <a class="pl" target="_blank" href="https://www.premierleague.com/">
                            <img class="pl-icon" src="Icons/32207-5-premier-league-file.png">Premier League
                        </a>
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.uefa.com/uefachampionsleague/">
                            <img style="height: 35px;" src="Icons/ucl.png">Champions League
                        </a>
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.laliga.com/">
                            <img style="height: 35px;" src="Icons/laliga.png">LaLiga
                        </a>
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.bundesliga.com/">
                            <img style="height: 35px;" src="Icons/bundesliga.png">Bundesliga
                        </a>    
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.legaseriaa.it/">
                            <img style="height: 35px; width: auto;" src="Icons/seriea.png">Seria A
                        </a>    
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.fifa.com/">
                            <img style="height: 35px; width: auto;" src="Icons/wc.png">World Cup
                        </a>    
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.ligue1.com/">
                            <img style="height: 35px; width: auto;" src="Icons/ligue1.png">Ligue 1
                        </a>    
                    </li>
                    <li>
                        <a class="pl" target="_blank" href="https://www.uefa.com/uefaeuropaleague/">
                            <img style="height: 35px; width: auto;" src="Icons/europa league.png">Europa League
                        </a>    
                    </li>
                </ul>
            </div>
        </div>
    </diV>

    
        
    <script src="script.js"></script>
</body>
</html>