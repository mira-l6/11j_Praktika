<?php
    //?
    //tazi str se izpulnqva pri zapazvane na zemedelska zemq ot buton zapazi
    session_start();


    include "db_connection.php";

    if(isset($_POST['offername']) && isset($_POST['price']) && isset($_POST['quadrature']) && isset($_POST['purpose']) && isset($_POST['category']) && isset($_POST['rent']) && isset($_POST['property-type']) && isset($_POST['land-type']) && isset($_POST['country']) && isset($_POST['populated-place-add-land']) && isset($_POST['town-area-add-land']) && isset($_POST['description']) /*features e незадължително поле; checkboks sa ili 1, ili 0 => nqma da se proverqva s isset*/)
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $offername = validate($_POST['offername']);
        $price = validate($_POST['price']);
        $quadrature = validate($_POST['quadrature']);
        $purpose = validate($_POST['purpose']);
        $category = validate($_POST['category']);
        $rent = validate($_POST['rent']);
        $date = validate($_POST['date']);
        $propertytype = validate($_POST['property-type']);
        $landtype = validate($_POST['land-type']);
        $country = validate($_POST['country']);
        $populatedplace = validate($_POST['populated-place-add-land']);
        $townarea = validate($_POST['town-area-add-land']);
        $description = validate($_POST['description']);
        //checkboxovete sa true/false i direktno se prisvoqvat
        $rentcontract = $_POST['rentcontract'];
        $forprivatepeople = $_POST['forprivatepeople'];

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

            if($rentcontract == true)
            {
                $sql = "INSERT INTO `land`(`land_Price`, `land_Quadrature`, `land_Description`, `land_Features`, `land_ForPrivatePeople`, `land_MethodOfUse`, `land_Category`, `land_RentContract`, `land_ContractDate`, `land_Rent`, `land_Country`, land_Province`, `land_City`, `land_Region`, `land_Type`, `land_Type`)
                            VALUES ($price, $quadrature, $description, $features, $forprivatepeople, $purpose, $category, true, $date, $rent, $country, $populatedplace, $offername, $townarea, $landtype, $propertytype)"; 
            }
            if($rentcontract == false)
            {
                $sql = "INSERT INTO `land`(`land_Price`, `land_Quadrature`, `land_Description`, `land_Features`, `land_ForPrivatePeople`, `land_MethodOfUse`, `land_Category`, `land_RentContract`, `land_Rent`, `land_Country`, land_Province`, `land_City`, `land_Region`, `land_Type`, `land_Type`)
                            VALUES ($price, $quadrature, $description, $features, $forprivatepeople, $purpose, $category, false, $rent, $country, $populatedplace, $offername, $townarea, $landtype, $propertytype)"; 
            }
            $result = mysqli_query($con, $sql);
            exit();
        }
    }
    else
    {
        header("Location: add-offer-land.html?не бачкам");
        exit();
    }