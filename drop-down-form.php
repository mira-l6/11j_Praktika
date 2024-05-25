<?php
    session_start();
    include 'db_connection';

    if(isset($_POST['property-type']) && isset($_POST['business-type']) && isset($_POST['country']) && isset($_POST['populated-place-add']) && isset($_POST['town-area-add']))
    {
        $propertytype = trim($_POST['property-type']);
        $businesstype = trim($_POST['business-type']);
        $country = trim($_POST['country']);
        $province = trim($_POST['populated-place-add']);
        $region = trim($_POST['town-area-add']);

        exit();
    }
    else
    {
        header("Location: add-offer-business.html?main-offer-form se precaka");
        exit();
    } 