<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nameofproperty = $_SESSION['nameofproperty'];
    //$nameofproperty = $offerType;

    $offername = $_POST['offername'];
    $offerprice = $_POST['price'];
    $offerrealtorid = $_SESSION['login_RealtorID'];
    $offerquadrature = $_POST['quadrature'];
    $offerdescription = $_POST['description-text'];
    $offerfeatures = $_POST['features'];
    $offerforprivatepeople = $_POST['forprivatepeople'];
    $offercountry = $_POST['country'];
    $offerprovince = $_POST['populated-place-add'];
    $offerregion = $_POST['town-area-add'];
    $offerpropertytype = $_POST['property-type'];
    $offerprefix = $nameofproperty;

    //изображения
    if($_FILES['image']['size'] <= 250000)
    {
        $image = $_FILES['image']['name'];
        $target_dir = "img/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    }
    else
    {
        header("Location: add-agent.html?error=Изображението е твърде голямо");
    }

    //заявки за добавяне
    switch ($nameofproperty)
    {
        case "проба":
            $title = "proba";
            break;
        case "business":
            $offerbusinesstype = $_POST['business-type'];
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $nameofproperty = "business_property";
            $offerprefix = "business";

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype', '$offerbusinesstype')";
            $resultsql = mysqli_query($con, $sql);
            break;
        case "garage":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `garage`(`garage_Price`, `garage_RealtorID`, `garage_Quadrature`, `garage_FloorFlat`, `garage_FloorBuilding`, `garage_ConstructionYear`, `garage_ConstructionType`, `garage_Description`, `garage_Features`, `garage_ForPrivatePeople`, `garage_Furnished`, `garage_Country`, `garage_Province`, `garage_City`, `garage_Region`, `garage_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "hotel":
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `hotel`(`hotel_Price`, `hotel_RealtorID`, `hotel_Quadrature`, `hotel_FloorBuilding`, `hotel_Gas`, `hotel_Tpp`, `hotel_ConstructionYear`, `hotel_ConstructionType`, `hotel_Description`, `hotel_Features`, `hotel_ForPrivatePeople`, `hotel_Furnished`, `hotel_Country`, `hotel_Province`, `hotel_City`, `hotel_Region`, `hotel_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "house":
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offeryard = $_POST['yard'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `house`(`house_Price`, `house_RealtorID`, `house_Quadrature`, `house_FloorBuilding`, `house_Gas`, `house_Tpp`, `house_ConstructionYear`, `house_ConstructionType`, `house_Description`, `house_Features`, `house_ForPrivatePeople`, `house_Furnished`, `house_Yard`, `house_Country`, `house_Province`, `house_City`, `house_Region`, `house_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offeryard', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "housefloor":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $nameofproperty = "house_floor";
            $offerprefix = "house_Floor";

            $sql = "INSERT INTO `house_floor`(`housefloor_Price`, `housefloor_RealtorID`, `houseFloor_Quadrature`, `housefloor_FloorFlat`, `housefloor_FloorBuilding`, `housefloor_Gas`, `housefloor_Tpp`, `housefloor_ConstructionYear`, `housefloor_ConstructionType`, `housefloor_Description`, `housefloor_Features`, `housefloor_ForPrivatePeople`, `housefloor_Furnished`, `housefloor_Country`, `housefloor_Province`, `housefloor_City`, `housefloor_Region`, `housefloor_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "industrial":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $nameofproperty = "industrial_premise";
            $offerprefix = "industrial_Premise";

            $sql = "INSERT INTO `industrial_premise`(`industrial_Price`, `industrial_RealtorID`, `industrial_Quadrature`, `industrial_FloorFlat`, `industrial_FloorBuilding`, `industrial_Gas`, `industrial_Tpp`, `industrial_ConstructionYear`, `industrial_ConstructionType`, `industrial_Description`, `industrial_Features`, `industrial_ForPrivatePeople`, `industrial_Furnished`, `industrial_Country`, `industrial_Province`, `industrial_City`, `industrial_Region`, `industrial_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "land":
            $offermethodofuse = $_POST['methodofuse'];
            $offercategory = $_POST['category'];
            $offerrentcontract = $_POST['rentcontract'];
            $offerrentcontractdate = $_POST['rentcontractdate'];

            $sql = "INSERT INTO `land`(`land_Price`, `land_RealtorID`, `land_Quadrature`, `land_Description`, `land_Features`, `land_ForPrivatePeople`, `land_MethodOfUse`, `land_Category`, `land_RentContract`, `land_RentContractDate`, `land_Country`, `land_Province`, `land_City`, `land_Region`, `land_Type`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offermethodofuse', '$offercategory', '$offerrentcontract', '$offerrentcontractdate', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "maisonette":
            $offerrooms = $_POST['rooms'];
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `maisonette`(`maisonette_Price`, `maisonette_RealtorID`, `maisonette_Quadrature`, `maisonette_FloorFlat`, `maisonette_FloorBuilding`, `maisonette_Gas`, `maisonette_Tpp`, 'maisonette_ConstructionYear`, `maisonette_ConstructionType`, `maisonette_Description`, `maisonette_Features`, `maisonette_ForPrivatePeople`, `maisonette_Furnished`, `maisonette_Country`, `maisonette_Province`, `maisonette_City`, `maisonette_Region`, `maisonette_Type`, `maisonette_Rooms`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerpropertytype', '$offerrooms')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "office":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            //dotuk sum
            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "plot":
            $offerregulation = $_POST['regulation'];
            $offerwater = $_POST['water'];
            $offerelectricity = $_POST['electricity'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "restaurant":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "room1":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "room2":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "room3":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "room4":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "roomn":
            $offerrooms = $_POST['rooms'];
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "shop":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "storage":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "studio":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
        case "villa":
            $offeryard = $_POST['yard'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];

            $sql = "INSERT INTO `business_property`(`business_Price`, `business_RealtorID`, `business_Quadrature`, `business_FloorFlat`, `business_FloorBuilding`, `business_Gas`, `business_Tpp`, `business_ConstructionYear`, `business_ConstructionType`, `business_Description`, `business_Features`, `business_ForPrivatePeople`, `business_Furnished`, `business_Country`, `business_Province`, `business_City`, `business_Region`, `business_Type`, `business_PropertyType`)
            VALUES ('$offerprice', '$offerrealtorid', '$offerquadrature', '$offerfloorflat', '$offerfloorbuilding', '$offergas', '$offertpp', '$offerconstructionyear', '$offerconstructiontype', '$offerdescription', '$offerfeatures', '$offerforprivatepeople', '$offerfurnished', '$offercountry', '$offerprovince', '$offername', '$offerregion', '$offerbusinesstype', '$offerpropertytype')";
            $resultsql = mysqli_query($con, $sql);

            break;
    }

    $result = mysqli_query($con, $sql);
    if($result)
    {
        $property_id = mysqli_insert_id(mysql: $con);
        $realtorid = $_SESSION['login_RealtorID'];

        $sqloffer = "INSERT INTO `offer` (`offer_Table`, `offer_PropertyID`, `offer_Prefix`, `offer_agentID`)
            VALUES ('$nameofproperty', '$property_id', '$offerprefix', '$realtorid')";
        $resultoffer = mysqli_query($con, $sqloffer);
        if($resultoffer)
        {
            $offer_id = mysqli_insert_id(mysql: $con);
            $imgtable = $nameofproperty."_images";
            $row1 = $offerprefix."_Image_Url";
            $row2 = $offerprefix."_Image_Name";
            $row3 = $offerprefix."_OfferID";


            $sqlimages = "INSERT INTO `$imgtable` (`$row1`, `$row2`, `$row3`)
                VALUES ('$image', '$target_file', '$offer_id')";
            $resultimages = mysqli_query($con, $sqlimages);
            if($resultimages)
            {
                header("Location: add-offer.php?Успешно добавихте оферта и изображение");
            }
        }
        else
        {

        }
        $con->close();
    }
    else
    {

    }
}