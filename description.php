<?php
    session_start();
    include 'db_connection';

    if(isset($_POST['description']))
    {
        $description = trim($_POST['description']);
        if($_POST['gas'] == "on")
        {
            $_POST['gas'] = 1;
        }
        else
        {
            $_POST['gas'] = 0;
        }
        if($_POST['tpp'] == "on")
        {
            $_POST['tpp'] = 1;
        }
        else
        {
            $_POST['tpp'] = 0;
        }
        if($_POST['forprivatepeople'] == "on")
        {
            $_POST['forprivatepeople'] = 1;
        }
        else
        {
            $_POST['forprivatepeople'] = 0;
        }
        if($_POST['furnished'] == "on")
        {
            $_POST['furnished'] = 1;
        }
        else
        {
            $_POST['furnished'] = 0;
        }
        $gas = $_POST['gas'];
        $tpp = $_POST['tpp'];
        $forprivatepeople = $_POST['forprivatepeople'];
        $furnished = $_POST['furnished'];

        if(isset($_POST['features']))
        {
            $features = trim($_POST['features']);
        }

        exit();
    }
    else
    {
        header("Location: add-offer-business.html?descriprion se precaka");
        exit();
    } 