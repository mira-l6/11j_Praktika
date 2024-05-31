<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();


    include "db_connection.php";
    //include "main-offer-form.php";
    //include "drop-down-form.php";
    //include "description.php";

        
    $realtorid = $_SESSION['login_RealtorID'];
            
    //маин оффер
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
    //дроп даун
    if(isset($_POST['property-type']) && isset($_POST['business-type']) && isset($_POST['country']) && isset($_POST['populated-place-add']) && isset($_POST['town-area-add']))
    {
        $propertytype = trim($_POST['property-type']);
        $businesstype = trim($_POST['business-type']);
        $country = trim($_POST['country']);
        $province = trim($_POST['populated-place-add']);
        $region = trim($_POST['town-area-add']);
    }
    //дескрип
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

    }

    $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$price', '$realtorid', '$quadrature', '$floorflat', '$floors', '$gas', '$tpp', '$constructionyear', '$constructiontype', '$description', '$features', '$forprivatepeople', '$furnished', '$country', '$populatedplace', '$offername', '$townarea', '$businesstype', '$propertytype')"; 
            $result = mysqli_query($con, $sql);
            if($result)
            {
                /*
                // vzima id na posledniq dobaven zapis
                $last_id = mysqli_insert_id($con);
                // zapazva go
                $_SESSION['last_id'] = $last_id;*/
                $sqllast = "SELECT `business_ID` FROM `business_property` ORDER BY `business_UploadTime` DESC LIMIT 1";
                $resultlast = mysqli_query($con, $sqllast);
                $last_id = $resultlast;
                $_SESSION['last_id'] = $last_id;
            }
            if(!$result)
            {
                echo "Добавянето на офертата в бизнес проперти не стана.";
            }


            $sqlgettime = "SELECT * FROM `business_property` WHERE `business_ID`='$last_id'";
            $resultgettime = mysqli_query($con, $sqlgettime);
            if(!$resultgettime)
            {
                echo "Взимането на последния бизнес имот беше неуспешно.";
            }
            $rowgettime = mysqli_fetch_assoc($sqlgettime);
            $timeofupload = $rowgettime['business_TimeOfUpload'];

            $sqladdoffer = "INSERT INTO `offer`(`offer_Table`, `offer_PropertyID`, `offer_TimeOfUpload`, `offer_Prefix`)
                        VALUES('business_property', '$last_id', '$timeofupload', 'business')";
            $resultaddoffer = mysqli_query($con, $sqladdoffer);
            if(!$resultaddoffer)
            {
                echo "Добавяне на оферта в таблица оффер не беше успешно.";
            }