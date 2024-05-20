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
    }
    if(isset($_POST['populated-place']))
    {
        $populated_place = trim($_POST['populated-place']);
    }
    if(isset($_POST['town-area']))
    {
        $town_area = trim($_POST['town-area']);
    }
    if(isset($_POST['max-price']))
    {
        $max_price = trim($_POST['max-price']);
    }
    else
    {
        $max_price = null;
    }
    if(isset($_POST['quadrature']))
    {
        $quadrature = validate($_POST['quadrature']);
    }
    else
    {
        $quadrature = null;
    }
   
    $sqlgetoffer = "";
    $resultgetoffer = mysqli_query($con, $sqlgetoffer);
    $offerscount = mysqli_num_rows($resultgetoffer);

    while ($rowgetoffer = mysqli_fetch_assoc($resultgetoffer)) 
    {
        $offers[] = $rowgetoffer;
    }