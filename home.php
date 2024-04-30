<?php
    //nai-skoroshnite obqvi shte se pokazvat otdolu
    session_start();

    include "db_connection.php";

    //select from vsichki tablici
    $sql = "SELECT * FROM `business_property`, `garage`, `hotel`, `house`, `house_floor`,  
            `industrial_premise`, `land`, `maisonette`, `office`, `plot`, `realtor`, `restaurant`, `room1`, `room2`, `room3`, `room4`, `roomn`, `shop`, `storage`, `studio`, `villa` ORDER BY `upload` DESC LIMIT 100"; 
    $sql2 = "SELECT * FROM (
        SELECT * FROM business_property ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM garage ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM hotel ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM house ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM house_floor ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM industrial_premise ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM land ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM maisonette ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM office ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM plot ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM realtor ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM restaurant ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM room1 ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM room2 ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM room3 ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM room4 ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM roomn ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM shop ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM storage ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM studio ORDER BY upload DESC LIMIT 100
        UNION ALL
        SELECT * FROM villa ORDER BY upload DESC LIMIT 100
    ) AS combined_data
    ORDER BY upload DESC
    LIMIT 100";
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    //shte se izkarvat po x oferti ot vseki tip
    for($i = 0; i < 10; $i++)
    {
        $price = $row['oferta_price'];
    }