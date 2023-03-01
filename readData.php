<?php
    function lexoLajmet(){
        require "databaza.php";

        $sql='SELECT * FROM lajmi';
        $rezultati = mysqli_query($con, $sql);
        
        
        while($rows = mysqli_fetch_assoc($rezultati)){
            return $rows;
        } 
    }
?>