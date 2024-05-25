<?php
    //?
    //tazi str se izpulnqva pri zapazvane na biznes imot ot buton zapazi
    //trqbva da se dobavq oferta v tablica offers
    session_start();


    include "db_connection.php";
    include "main-offer-form.php";
    include "drop-down-form.php";
    include "description.php";
    include "upload-copy copy.php";

    //FORM
    //za uploadvane na snimki

    $targetdirectory = "img/";
    $isupload = 1;

    //dali ima kacheni failove
    if(!empty($_FILES['images']['name'][0])) 
    {
        //obhozhdane na vsichki snimki
        foreach($_FILES['images']['name'] as $key => $val) 
        {
            $target_file = $targetdirectory . basename($_FILES['images']['name'][$key]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $uploadOk = 1;

            //proverka dali e kacheno izobrazhenie
            $check = getimagesize($_FILES['images']['tmp_name'][$key]);
            if($check === false) 
            {
                echo "Файлът не е изображение.";
                $uploadOk = 0;
            }

            // proverqva dali veche ne syshtestvuva
            if(file_exists($target_file)) 
            {
                echo "Файлът вече съществува.";
                $uploadOk = 0;
            }

            // ogranichenie za razmera
            if($_FILES['images']['size'][$key] > 5000000) 
            {
                echo "Файлът е твърде голям.";
                $uploadOk = 0;
            }

            // proverka za razshireniqta na failovete
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
            {
                echo "Разрешени са само JPG, JPEG, PNG & GIF файлове.";
                $uploadOk = 0;
            }

            
            if($uploadOk == 0) 
            {
                echo "Файлът не беше качен.";
            } 
            else 
            {
                if(move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) 
                {
                    //echo "Файлът ". htmlspecialchars(basename($_FILES['images']['name'][$key])). " беше успешно качен.";
                    $image_name = htmlspecialchars(basename($_FILES['images']['name'][$key]));
                    $offer_id = $_SESSION['last_id'];
                    /*$sql_img = "INSERT INTO `business_property_images` (`business_Image_Url`, `business_Image_Name`, `business_OfferID`) VALUES ('$target_file', '$image_name', $offer_id)";
                    if (mysqli_query($con, $sql_img)) 
                    {
                        echo "Информацията за изображението беше успешно запазена в базата данни.";
                    } else 
                    {
                        echo "Възникна грешка при запазването на информацията за изображението: " . mysqli_error($con);
                    }*/
                } 
                else 
                {
                    echo "Възникна грешка при качването на вашия файл.";
                }
            }
        }
    } 
    else 
    {
        echo "Не са избрани файлове за качване.";
    }

    //MAIN OFFER FORM
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
    else
    {
        header("Location: add-offer-business.html?main-offer-form se precaka");
        exit();
    } 

    //DROP DOWN FORM
    if(isset($_POST['property-type']) && isset($_POST['business-type']) && isset($_POST['country']) && isset($_POST['populated-place-add']) && isset($_POST['town-area-add']))
    {
        $propertytype = trim($_POST['property-type']);
        $businesstype = trim($_POST['business-type']);
        $country = trim($_POST['country']);
        $province = trim($_POST['populated-place-add']);
        $region = trim($_POST['town-area-add']);

        exit();
    }
    else
    {
        header("Location: add-offer-business.html?main-offer-form se precaka");
        exit();
    } 

    //DESCRIPRION
    if(isset($_POST['description']))
    {
        $description = trim($_POST['description']);
        $gas = $_POST['gas'];
        $tpp = $_POST['tpp'];
        $forprivatepeople = $_POST['forprivatepeople'];
        $furnished = $_POST['furnished'];

        if(isset($_POST['features']))
        {
            $features = trim($_POST['features']);
        }

        exit();
    }
    else
    {
        header("Location: add-offer-business.html?descriprion se precaka");
        exit();
    } 


        
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
            }

            $sql_img = "INSERT INTO `business_property_images` (`business_Image_Url`, `business_Image_Name`, `business_OfferID`) VALUES ('$target_file', '$image_name', '$offer_id')";
            if (mysqli_query($con, $sql_img)) 
            {
                //echo "Информацията за изображението беше успешно запазена в базата данни.";
            } 
            else 
            {
                echo "Възникна грешка при запазването на информацията за изображението: " . mysqli_error($con);
            }


            $sqlgettime = "SELECT * FROM `business_property` WHERE `business_ID`='$last_id'";
            $resultgettime = mysqli_query($con, $sqlgettime);
            $rowgettime = mysqli_fetch_assoc($sqlgettime);
            $timeofupload = $rowgettime['business_TimeOfUpload'];

            $sqladdoffer = "INSERT INTO `offer`(`offer_Table`, `offer_PropertyID`, `offer_TimeOfUpload`, `offer_Prefix`)
                        VALUES('business_property', '$last_id', '$timeofupload', `business`)";
            $resultaddoffer = mysqli_query($con, $sqladdoffer);