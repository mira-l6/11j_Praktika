<?php
    //proevrka dali ima podadeni danni, prosta validaciq na poluchenite danni
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
    }


    //vruzka s bd
    $conn = new mysqli('localhost', 'root', 'test', 'ime na bd');

    //proverka na vruzkata
    if($conn->connect_error || !$conn)
    {
        die('Connection error: '.mysqli_connect_error());
    }
    else
    {
        
    }

    //funkciq za prosta validaciq na polucheni danni
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
