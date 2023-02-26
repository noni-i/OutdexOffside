<?php
    $servername = "localhost";
    $db = 'sistemilogin';
    $username = "root";
    $password = null;

    $con = mysqli_connect($servername,$username,$password,$db);

    if (mysqli_connect_errno()){
        echo "Deshtim i lidhjes me MySQL ". mysqli_connect_error();
    }
?>