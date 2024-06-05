<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();
    include "db_connection.php";

    //$realtorid = 2;
    $realtorid = $_SESSION['login_RealtorID'];

        if(isset($_POST['offername']) && isset($_POST['price']) && isset($_POST['quadrature']) && isset($_POST['floorflat']) && isset($_POST['floors']) && isset($_POST['constructionyear']) && isset($_POST['constructiontype']) && isset($_POST['description-text']))
        {
            $offername = trim($_POST['offername']);
            $price = trim($_POST['price']);
            $quadrature = trim($_POST['quadrature']);
            $floorflat = trim($_POST['floorflat']);
            $floors = trim($_POST['floors']);
            $constructionyear = trim($_POST['constructionyear']);
            $constructiontype = trim($_POST['constructiontype']);
            $propertytype = trim($_POST['property-type']);
            $businesstype = trim($_POST['business-type']);
            $country = trim($_POST['country']);
            $province = trim($_POST['populated-place-add']);
            $region = trim($_POST['town-area-add']);
            $description = trim($_POST['description-text']);

        if($_POST['features'] != null)
        {
            $features = trim($_POST['features']);
        }
        else
        {
            $features = null;
        }
        if($_POST['gas'] == "on")
        {
            $gas = 1;
        }
        else
        {
            $gas = 0;
        }
        if($_POST['tpp'] == "on")
        {
            $tpp = 1;
        }
        else
        {
            $tpp = 0;
        }
        if($_POST['forprivatepeople'] == "on")
        {
            $forprivatepeople = 1;
        }
        else
        {
            $forprivatepeople = 0;
        }
        if($_POST['furnished'] == "on")
        {
            $furnished = 1;
        }
        else
        {
            $furnished = 0;
        }
        
        $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$price', '$realtorid', '$quadrature', '$floorflat', '$floors', '$gas', '$tpp', '$constructionyear', '$constructiontype', '$description', '$features', '$forprivatepeople', '$furnished', '$country', '$populatedplace', '$offername', '$townarea', '$businesstype', '$propertytype')"; 
        $result = mysqli_query($con, $sql);
        
        if($result)
        {
                // vzima id na posledniq dobaven zapis
                $sqllast = "SELECT * FROM `business_property` ORDER BY `business_ID` DESC LIMIT 1";
                $resultlast = mysqli_query($con, $sqllast);
                if($resultlast)
                {
                    $rowlast = mysqli_fetch_assoc($resultlast);
                    $last_id = $rowlast['business_ID'];
                    //$_SESSION['last_id'] = $last_id;
                    $timeofupload = $rowlast['business_UploadTime'];

                    $sqladdoffer = "INSERT INTO `offer`(`offer_Table`, `offer_PropertyID`, `offer_TimeOfUpload`, `offer_Prefix`)
                        VALUES('business_property', '$last_id', '$timeofupload', 'business')";
                    $resultaddoffer = mysqli_query($con, $sqladdoffer);

                    if(!$resultaddoffer)
                    {
                        header("Location: login.html?error=Dobavqne v tablica offer be neuspeshno.");
                    }
                }
                else
                {
                    header("Location: login.html?error=Query for getting the last business property not working");
                }
            header("Location: add-offer-business.html");
        }
        else
        {
            echo "No result from add property query";
        }    
    }