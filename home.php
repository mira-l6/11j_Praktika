<?php
    //nai-skoroshnite obqvi shte se pokazvat otdolu
    session_start();

    include "db_connection.php";

    //select from vsichki tablici
    $sql = "SELECT * FROM `` ORDER BY `upload` DESC LIMIT 100"; 
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    //shte se izkarvat po x oferti ot vseki tip
    for($i = 0; i < 10; $i++)
    {
        $price = $row['oferta_price'];
    }