<?php
    //?
    //tazi str se izpulnqva sled natiskane na buton filtrirai
    session_start();


    include "db_connection.php";

    //bez if za proverka na isset za stoinostite, zashtoto moje da filtrirash i po nishto

    //proverka dali za vsqko ot menutata e izbrana stoinost; opciq vsichki
    //value = all v html faila
    if(isset($_POST['property-type']))
    {
        $property_type = trim($_POST['property-type']);
        $propertytypeqry = "``";
    }
    else
    {
        $propertytypeqry = "";
    }
    if(isset($_POST['populated-place']))
    {
        $populated_place = trim($_POST['populated-place']);
        $populatedplaceqry = "";
    }
    else
    {
        $populatedplaceqry = "";
    }
    if(isset($_POST['town-area']))
    {
        $town_area = trim($_POST['town-area']);
        $townareaqry = "";
    }
    else
    {
        $townareaqry = "";
    }
    if(isset($_POST['max-price']))
    {
        $max_price = trim($_POST['max-price']);
        $maxpriceqry = "";
    }
    else
    {
        $max_price = null;
        $maxpriceqry = "";
    }
    if(isset($_POST['min-price']))
    {
        $min_price = trim($_POST['min-price']);
        $minpriceqry = "";
    }
    else
    {
        $min_price = null;
        $minpriceqry = "";
    }
    if(isset($_POST['min_quadrature']))
    {
        $min_quadrature = validate($_POST['min_quadrature']);
        $minquadratureqry = "";
    }
    else
    {
        $min_quadrature = null;
        $minquadratureqry = "";
    }
    if(isset($_POST['max_quadrature']))
    {
        $max_quadrature = validate($_POST['max_quadrature']);
        $maxquadratureqry = "";
    }
    else
    {
        $max_quadrature = null;
        $maxquadratureqry = "";
    }
   
    //zaqvkata da se konkatinira samo ot nenull stoinostite

    //s for cikul se obhojda masiv s vsichki vidove imoti
    $sqlgetoffer = "SELECT * FROM `` WHERE ";
    $resultgetoffer = mysqli_query($con, $sqlgetoffer);
    $offerscount = mysqli_num_rows($resultgetoffer);

    while ($rowgetoffer = mysqli_fetch_assoc($resultgetoffer)) 
    {
        $offers[] = $rowgetoffer;
    }