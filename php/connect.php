<?php
    //polucheni promenlivi ot nqkoi form
    //$promenliva = $_POST["promenliva"];

    //vruzka s bd
    $conn = new mysqli('localhost', 'root', '', '');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into registration(promenliva")
    }
?>