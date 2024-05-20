<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();


    include "db_connection.php";
    include "main-offer-form.php";
    include "drop-down-form.php";
    include "description.php";
        
        $realtorid = $_SESSION['login_RealtorID'];
            
            $sql = "INSERT INTO `business_property`(`business_Price`, `business_Realtor_ID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
                        VALUES ($price, $realtorid, $quadrature, $floorflat, $floors, $gas, $tpp, $constructionyear, $constructiontype, $description, $features, $forprivatepeople, $furnished, $country, $populatedplace, $offername, $townarea, $businesstype, $propertytype)"; 
            $result = mysqli_query($con, $sql);
            if($result)
            {
                // vzima id na posledniq dobaven zapis
                $last_id = mysqli_insert_id($con);
                // zapazva go
                $_SESSION['last_id'] = $last_id;
                exit();
            }
/*
            $sqladdoffer = "INSERT INTO `offer`(`offer_Table`, `offer_PropertyID`, `offer_TimeOfUpload`, `offer_Prefix`)
                        VALUES('business_property', $, $, `business`)";
            $resultaddoffer = mysqli_query($con, $sqladdoffer);*/