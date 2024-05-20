<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();


    include "db_connection.php";
    include "main-offer-form.php";
    include "drop-down-form.php";
    include "description.php";

        $propertytype = trim($_POST['property-type']);
        $businesstype = trim($_POST['business-type']);
        $country = trim($_POST['country']);
        $populatedplace = trim($_POST['populated-place-add']);
        $townarea = trim($_POST['town-area-add']);
        $description = trim($_POST['description']);
        
        $realtorid = $_SESSION['login_RealtorID'];

        if(empty($offername))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        else if(empty($price))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        else if(empty($quadrature))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        else if(empty($floors))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        else if(empty($constructionyear))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        else if(empty($constructiontype))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        if(empty($propertytype))
        {
            header("Location: login.html?error=Типът на имота е задължителен!");
            exit();
        }
        else if(empty($businesstype))
        {
            header("Location: login.html?error=Видът бизнес е задължителен!");
            exit();
        }
        else if(empty($country))
        {
            header("Location: login.html?error=Държавата е задължителна!");
            exit();
        }
        else if(empty($populatedplace))
        {
            header("Location: login.html?error=Населеното място е задължително!");
            exit();
        }
        else if(empty($townarea))
        {
            header("Location: login.html?error=Районът е задължителен!");
            exit();
        }
        else if(empty($description))
        {
            header("Location: login.html?error=Описанието е задължително!");
            exit();
        }
        //features e незадължително поле
        else
        {
            
            $sql = "INSERT INTO `business_property`(`business_Price`, `business_Realtor_ID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
                        VALUES ($price, $realtorid, $quadrature, $floorflat, $floors, $gas, $tpp, $constructionyear, $constructiontype, $description, $features, $forprivatepeople, $furnished, $country, $populatedplace, $offername, $townarea,$businesstype, $propertytype)"; 
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
        }