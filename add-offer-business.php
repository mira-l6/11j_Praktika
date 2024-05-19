<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();


    include "db_connection.php";

    //offername?
    if(isset($_POST['offername']) && isset($_POST['price']) && isset($_POST['quadrature']) && isset($_POST['floorflat']) && isset($_POST['floors']) && isset($_POST['constructionyear']) && isset($_POST['constructiontype']) && isset($_POST['property-type']) && isset($_POST['business-type']) && isset($_POST['country']) && isset($_POST['populated-place-add']) && isset($_POST['town-area-add']) && isset($_POST['description']) /*features e незадължително поле; checkboks sa ili 1, ili 0 => nqma da se proverqva s isset*/)
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

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
        $populatedplace = trim($_POST['populated-place-add']);
        $townarea = trim($_POST['town-area-add']);
        $description = trim($_POST['description']);
        //checkboxovete sa true/false i direktno se prisvoqvat
        $gas = $_POST['gas'];
        $tpp = $_POST['tpp'];
        $forprivatepeople = $_POST['forprivatepeople'];
        $furnished = $_POST['furnished'];

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
            //ako ima zadadeni osobenosti, dannite se validirat.
            if(isset($_POST['features']))
            {
                $features = $_POST['features'];
                $features = trim($features);
                $features = htmlspecialchars($features);
            }
            $sql = "INSERT INTO `business_property`(`business_Price`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
                        VALUES ($price, $quadrature, $floorflat, $floors, $gas, $tpp, $constructionyear, $constructiontype, $description, $features, $forprivatepeople, $furnished, $country, $populatedplace, $offername, $townarea,$businesstype, $propertytype)"; 
            $result = mysqli_query($con, $sql);
            if($result)
            {
                // vzima id na posledniq dobaven zapis
                $last_id = mysqli_insert_id($con);
                // zapazva go
                $_SESSION['last_id'] = $last_id;
                exit();
            }
        }
    }
    else
    {
        header("Location: add-offer-business.html?не бачкам");
        exit();
    }

    