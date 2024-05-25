<?php
    session_start();
    include 'db_connection';

    if(isset($_POST['description']))
    {
        $description = trim($_POST['description']);
        $gas = $_POST['gas'];
        $tpp = $_POST['tpp'];
        $forprivatepeople = $_POST['forprivatepeople'];
        $furnished = $_POST['furnished'];

        if(isset($_POST['features']))
        {
            $features = trim($_POST['features']);
        }

        //exit();
    }
    else
    {
        header("Location: add-offer-business.html?descriprion se precaka");
        exit();
    } 