<?php
    //polucheni promenlivi ot nqkoi form
    //$promenliva = $_POST["promenliva"];

    //vruzka s bd
    $conn = new mysqli('localhost', 'root', 'test', 'ime na bd');

    //proverka na vruzkata
    if($conn->connect_error || !$conn)
    {
        die('Connection error: '.mysqli_connect_error());
    }
    else
    {
        $stmt = $conn->prepare("insert into registration(promenliva) values(?)");
        //s - string
        //d - float
        //i - int
        //b - blob
        $stmt->bind_param("s", $promenliva);
        $stmt->execute();
        echo "registration succesfully...";
        $stmt->close();
        $conn->close();
    }

    
?>