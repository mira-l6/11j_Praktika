<?php
    //vruzka s bd
    $conn = new mysqli('localhost', 'root', 'test', 'ime na bd');

    //proverka na vruzkata
    if(!$conn || $conn->connect_error)
    {
        echo 'Connection error: '.mysqli_connect_error();
    }

    //pisane na zaqvka
    $sql = 'SELECT * FROM tablica';

    //suzdavane na zaqvka i poluchavane na rezultat
    $result = mysqli_query($conn, $sql);

    //preobrazuvane na redovete v asociativen masiv
    $masiv = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //osvobojdavane na rezultata ot pametta
    mysqli_free_result($result);
    //zatvarqne na vruzkata
    mysqli_close($conn);

