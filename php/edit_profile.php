<?php
    //?
    //tazi str se izpulnqva pri zapazvane na promenite ot butona Zapazi
    session_start();


    include "db_connection.php";

    //isset potrime, ime, familiq, tn
    if(isset($_POST['']) && isset($_POST['']))
    {
        $username = validate($_POST['username']);
        //i tn s ostanalite poleta
        
        //bez proverka dali sa populneni, zashtoto te shte sudurjat starite danni i vinagi shte budat populneni
        //sql zaqvka za promqna na bazata danni

    }

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }