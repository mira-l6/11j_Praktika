<?php
    //?
    //tazi str se izpulnqva pri zapazvane na broker ot buton zapazi
    session_start();


    include "db_connection.php";

    //vsichki poleta isset
    if(isset($_POST['']) && isset($_POST['']))
    {
        //vsichki poleta
        $username = validate($_POST['username']);

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
            //zaqvka za dobavqne na zapis
        }
    }
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }