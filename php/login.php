<?php

    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="Katerina27";
    $dbname="ForumDB";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

    //$con->close();

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if(empty($username))
        {
            header("Location: login.html?error=Потребителското име е задължително!");
            exit();
        }
        else if(empty($password))
        {
            header("Location: login.html?error=Паролата е задължителна!");
            exit();
        }
        else
        {

        }
    }
    else
    {
        header("Location: login.html");
        exit();
    }