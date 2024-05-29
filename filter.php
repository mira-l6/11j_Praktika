<?php
    //?
    //tazi str se izpulnqva sled natiskane na buton filtrirai
    session_start();


    include "db_connection.php";

    //bez if za proverka na isset za stoinostite, zashtoto moje da filtrirash i po nishto

    //proverka dali za vsqko ot menutata e izbrana stoinost; opciq vsichki
    //value = all v html faila
    if(($_POST['property-type']) == "all")
    {
        $property_type = trim($_POST['property-type']);
        $propertytypeqry = "`business_property`, `garage`, `hotel`, `house`, `house_floor`, `industrial_premise`, `land`, `maisonette`, `office`, `plot`, `restaurant`, `room1`, `room2`, `room3`, `room4`, `roomn`, `shop`, `storage`, `studio`, `villa`";
    }
    else
    {
        switch($_POST['property-type'])
        {
            case "room1":
                $propertytypeqry = "`room1`";
                break;
            case "room2":
                $propertytypeqry = "`room2`";
                break;
            case "room3":
                $propertytypeqry = "`room3`";
                break;
            case "room4":
                $propertytypeqry = "`room4`";
                break;
            case "roomn":
                $propertytypeqry = "`roomn`";
                break;
            case "maisonette":
                $propertytypeqry = "`maisonette`";
                break;
            case "studio":
                $propertytypeqry = "`studio`";
                break;
            case "office":
                $propertytypeqry = "`office`";
                break;
            case "store":
                $propertytypeqry = "`store`";
                break;
            case "restaurant":
                $propertytypeqry = "`restaurant`";
                break;
            case "storage":
                $propertytypeqry = "`storage`";
                break;
            case "hotel":
                $propertytypeqry = "`hotel`";
                break;
            case "industrial":
                $propertytypeqry = "`industrial_premise`";
                break;
            case "business":
                $propertytypeqry = "`business_property`";
                break;
            case "housefloor":
                $propertytypeqry = "`housefloor`";
                break;
            case "house":
                $propertytypeqry = "`house`";
                break;
            case "villa":
                $propertytypeqry = "`villa`";
                break;
            case "plot":
                $propertytypeqry = "`plot`";
                break;
            case "garage":
                $propertytypeqry = "`garage`";
                break;
            case "land":
                $propertytypeqry = "`land`";
                break;
        }
    }
    if(($_POST['populated-place']) == "all")
    {
        $populatedplaceqry = "";
    }
    else
    {
        $populated_place = trim($_POST['populated-place']);
        $populatedplaceqry = "``".$populated_place;
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