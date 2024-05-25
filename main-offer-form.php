<?php
    session_start();
    include 'db_connection';

    if(isset($_POST['offername']) && isset($_POST['price']) && isset($_POST['quadrature']) && isset($_POST['floorflat']) && isset($_POST['floors']) && isset($_POST['constructionyear']) && isset($_POST['constructiontype']))
    {
        $offername = trim($_POST['offername']);
        $price = trim($_POST['price']);
        $quadrature = trim($_POST['quadrature']);
        $floorflat = trim($_POST['floorflat']);
        $floors = trim($_POST['floors']);
        $constructionyear = trim($_POST['constructionyear']);
        $constructiontype = trim($_POST['constructiontype']);

        //exit();
    }
    else
    {
        header("Location: add-offer-business.html?main-offer-form se precaka");
        exit();
    } 