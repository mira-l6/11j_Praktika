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
        $property_type = validate($_POST['property-type']);
    }
    if(isset($_POST['populated-place']))
    {
        $populated_place = validate($_POST['populated-place']);
    }
    if(isset($_POST['town-area']))
    {
        $town_area = validate($_POST['town-area']);
    }
    if(isset($_POST['max-price']))
    {
        $max_price = validate($_POST['max-price']);
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
   
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }