<?php
 
    $host="localhost";
    $port=3306;
    $user="cpses_zh8kv5xik9@localhost";
    $password="domein@123";
    $dbname="zhojxvsm_ForumDB";

    $con = new mysqli($host, $user, $password, $dbname, $port);
    //    or die ('Could not connect to the database server' . mysqli_connect_error());
    if(!$con)
    {
        header("Location: login.html?не бачкам");
        exit();
    }

    //$con->close();
