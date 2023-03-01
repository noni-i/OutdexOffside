<?php
    session_start();

    require "databaza.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $dataSelektuar = $_REQUEST['datepicker'];
    
        $dataQuery = date("Y-m-d", strtotime($dataSelektuar));
        
        #Angli
        $sqlPL = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Premier League' ORDER BY `rezultatet`.`orari` ASC";
        $queryPL = mysqli_query($con, $sqlPL);

        $flag = mysqli_num_rows($queryPL);

        #Spanje
        $sqlLL = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'LaLiga' ORDER BY `rezultatet`.`orari` ASC";
        $queryLL = mysqli_query($con, $sqlLL);

        $flages = mysqli_num_rows($queryLL);

        #Itali
        $sqlSA = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Serie A' ORDER BY `rezultatet`.`orari` ASC";
        $querySA = mysqli_query($con, $sqlSA);

        $flagit = mysqli_num_rows($querySA);

        #Kosovë
        $sqlKS = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Superliga' ORDER BY `rezultatet`.`orari` ASC";
        $queryKS = mysqli_query($con, $sqlKS);

        $flagks = mysqli_num_rows($queryKS);
    }else{
        $dataQuery = date("Y-m-d");
        
        #Angli
        $sqlPL = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Premier League' ORDER BY `rezultatet`.`orari` ASC";
        $queryPL = mysqli_query($con, $sqlPL);

        $flag = mysqli_num_rows($queryPL);

        #Spanje
        $sqlLL = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'LaLiga' ORDER BY `rezultatet`.`orari` ASC";
        $queryLL = mysqli_query($con, $sqlLL);

        $flages = mysqli_num_rows($queryLL);

        #Itali
        $sqlSA = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Serie A' ORDER BY `rezultatet`.`orari` ASC";
        $querySA = mysqli_query($con, $sqlSA);

        $flagit = mysqli_num_rows($querySA);
        
        #Kosovë
        $sqlKS = "SELECT * FROM rezultatet WHERE CAST(orari AS date) = '$dataQuery' AND liga = 'Superliga' ORDER BY `rezultatet`.`orari` ASC";
        $queryKS = mysqli_query($con, $sqlKS);

        $flagks = mysqli_num_rows($queryKS);
    }

    function toString($data){
        $arrayMuajt = ['Janar', 'Shkurt', 'Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nëntor', 'Dhjetor'];
        $strArray = explode("/", $data);
        $m = $strArray[0] - 1;
        return $strArray[1]." ".$arrayMuajt[$m]." ".$strArray[2];
      }

      

      function DateToString($x){
        $today = date("m/d/Y");
        $yesterday = date("m/d/Y", strtotime("-1 days"));
        $tomorrow = date("m/d/Y", strtotime("+1 days"));
        
        switch($x) {
          case $today:
            return 'Ndeshjet e Sotme';
            break;
          case $yesterday:
            return 'Ndeshjet e Djeshme';
            break;
          case $tomorrow:
              return 'Ndeshjet e Nesërme';
              break;
          default:
            return 'Ndeshjet';
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

    <div class="body">
        <div class="scores-table">
            <ul style="padding-left: 0%;" list-style-type="none">
                <li id="list-data">
                    
                    <div class="date">
                        <ul style="padding-left: 6%;" list-style-type="none">
                        <h1 id="month-header"><?php if($_SERVER["REQUEST_METHOD"] == "POST"){echo DateToString($dataSelektuar);} else { echo "Ndeshjet e Sotme";} ?></h1>
                        <p1 id="score-date"><?php if($_SERVER["REQUEST_METHOD"] == "POST"){echo toString($dataSelektuar);} else { echo toString(date("m/d/Y"));} ?></p1>
                        </ul>
                        <div class="data-majtas">
                        <form id="myform" action="<?php $_PHP_SELF ?>" method="POST">
                            <!--<button class="date-arrow-button" type="button"><img class="arrow-buttons" src="Icons/left-arrow.png"></button>-->
                            <input type="text" name="datepicker" id="datepicker" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST"){echo $dataSelektuar;} else { echo date("m/d/Y");}?>">
                            <img src="Icons/calendar.png" id="calendar-icon">
                            <!--<button class="date-arrow-button" type="button"><img class="arrow-buttons" src="Icons/right-arrow.png"></button>-->
                        </form>
                        </div>
                    </div>
                    <?php if($flag > 0) {?>
                
                    <li class="dividerat">
                    <img src="Icons/eng.png" style="height: 25px; margin-top: 9px; margin-left: 10px;">
                    <p class="ligadivider">Angli - Premier League</p>
                </li>

                    <?php }; 
                    
                        if($_SERVER["REQUEST_METHOD"] == "POST"){

                    while($rows = mysqli_fetch_assoc($queryPL)){?>
                        <li class="dividerat">
                    <div class="fixture">
                        <p><?php echo $rows['ekipi_vendas']?></p>
                        <img src="Club Icon/<?php echo $rows['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                        <p style="color: <?php if($rows['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rows['rezultati'] == ""){echo date('H:i', strtotime($rows['orari']));}else{ echo $rows['rezultati'];} ?></p>
                        <img src="Club Icon/<?php echo $rows['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                        <p><?php echo $rows['ekipi_mysafir']?></p>
                    </div>
                </li>


                    <?php };

                        }else{
                            while($rows = mysqli_fetch_assoc($queryPL)){?>
                                <li class="dividerat">
                            <div class="fixture">
                                <p><?php echo $rows['ekipi_vendas']?></p>
                                <img src="Club Icon/<?php echo $rows['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                                <p style="color: <?php if($rows['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rows['rezultati'] == ""){echo date('H:i', strtotime($rows['orari']));}else{ echo $rows['rezultati'];} ?></p>
                                <img src="Club Icon/<?php echo $rows['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                                <p><?php echo $rows['ekipi_mysafir']?></p>
                            </div>
                        </li>
        
        
                            <?php }
                        }
                    ?>
                    <?php if($flages > 0) {?>
                
                <li class="dividerat">
                <img src="Icons/esp.png" style="height: 25px; margin-top: 9px; margin-left: 10px;">
                <p class="ligadivider">Spanjë - LaLiga</p>
            </li>

                <?php };if($_SERVER["REQUEST_METHOD"] == "POST"){

while($rowsLL = mysqli_fetch_assoc($queryLL)){?>
    <li class="dividerat">
<div class="fixture">
    <p><?php echo $rowsLL['ekipi_vendas']?></p>
    <img src="Club Icon/<?php echo $rowsLL['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
    <p style="color: <?php if($rowsLL['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsLL['rezultati'] == ""){echo date('H:i', strtotime($rowsLL['orari']));}else{ echo $rowsLL['rezultati'];} ?></p>
    <img src="Club Icon/<?php echo $rowsLL['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
    <p><?php echo $rowsLL['ekipi_mysafir']?></p>
</div>
</li>


<?php };

    }else{
        while($rowsLL = mysqli_fetch_assoc($queryLL)){?>
            <li class="dividerat">
        <div class="fixture">
            <p><?php echo $rowsLL['ekipi_vendas']?></p>
            <img src="Club Icon/<?php echo $rowsLL['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
            <p style="color: <?php if($rowsLL['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsLL['rezultati'] == ""){echo date('H:i', strtotime($rowsLL['orari']));}else{ echo $rowsLL['rezultati'];} ?></p>
            <img src="Club Icon/<?php echo $rowsLL['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
            <p><?php echo $rowsLL['ekipi_mysafir']?></p>
        </div>
    </li>


        <?php }
    }
?>


<?php if($flagit > 0) {?>
                
                <li class="dividerat">
                <img src="Icons/ita.png" style="height: 25px; margin-top: 9px; margin-left: 10px;">
                <p class="ligadivider">Itali - Serie A</p>
            </li>

                <?php }; 
                
                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                while($rowsSA = mysqli_fetch_assoc($querySA)){?>
                    <li class="dividerat">
                <div class="fixture">
                    <p><?php echo $rowsSA['ekipi_vendas']?></p>
                    <img src="Club Icon/<?php echo $rowsSA['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                    <p style="color: <?php if($rowsSA['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsSA['rezultati'] == ""){echo date('H:i', strtotime($rowsSA['orari']));}else{ echo $rowsSA['rezultati'];} ?></p>
                    <img src="Club Icon/<?php echo $rowsSA['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                    <p><?php echo $rowsSA['ekipi_mysafir']?></p>
                </div>
            </li>


                <?php };

                    }else{
                        while($rowsSA = mysqli_fetch_assoc($querySA)){?>
                            <li class="dividerat">
                        <div class="fixture">
                            <p><?php echo $rowsSA['ekipi_vendas']?></p>
                            <img src="Club Icon/<?php echo $rowsSA['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                            <p style="color: <?php if($rowsSA['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsSA['rezultati'] == ""){echo date('H:i', strtotime($rowsSA['orari']));}else{ echo $rowsSA['rezultati'];} ?></p>
                            <img src="Club Icon/<?php echo $rowsSA['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                            <p><?php echo $rowsSA['ekipi_mysafir']?></p>
                        </div>
                    </li>
    
    
                        <?php }
                    }
                ?>



<?php if($flagks > 0) {?>
                
                <li class="dividerat">
                <img src="Icons/kos.png" style="height: 25px; margin-top: 9px; margin-left: 10px;">
                <p class="ligadivider">Kosovë - Superliga</p>
            </li>

                <?php }; 
                
                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                while($rowsks = mysqli_fetch_assoc($queryKS)){?>
                    <li class="dividerat">
                <div class="fixture">
                    <p><?php echo $rowsks['ekipi_vendas']?></p>
                    <img src="Club Icon/<?php echo $rowsks['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                    <p style="color: <?php if($rowsks['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsks['rezultati'] == ""){echo date('H:i', strtotime($rowsks['orari']));}else{ echo $rowsks['rezultati'];} ?></p>
                    <img src="Club Icon/<?php echo $rowsks['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                    <p><?php echo $rowsks['ekipi_mysafir']?></p>
                </div>
            </li>


                <?php };

                    }else{
                        while($rowsks = mysqli_fetch_assoc($queryKS)){?>
                            <li class="dividerat">
                        <div class="fixture">
                            <p><?php echo $rowsks['ekipi_vendas']?></p>
                            <img src="Club Icon/<?php echo $rowsks['ekipi_vendas']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                            <p style="color: <?php if($rowsks['rezultati'] == ""){echo "gray";}else{echo "white";}?>; width: 50px;"><?php if($rowsks['rezultati'] == ""){echo date('H:i', strtotime($rowsks['orari']));}else{ echo $rowsks['rezultati'];} ?></p>
                            <img src="Club Icon/<?php echo $rowsks['ekipi_mysafir']?>.png" style="height: 30px; margin-left: 10px; margin-right: 10px;">
                            <p><?php echo $rowsks['ekipi_mysafir']?></p>
                        </div>
                    </li>
    
    
                        <?php }
                    }
                ?>

            </ul>
        </div>

        <div class="top-leagues">
            <h1 id="topleagues">Ligat Kryesore</h1>

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

