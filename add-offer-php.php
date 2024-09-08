<?php
//Втори код работещ за една форма

session_start();
include "db_connection.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $nameofproperty = $_SESSION['nameofproperty'];

    $offername = $_POST['offername'];
    $offerprice = $_POST['price'];
    $offerrealtorid = 1;
    $offerquadrature = $_POST['quadrature'];
    $offerdescription = $_POST['description-text'];
    $offerfeatures = $_POST['features'];
    $offerforprivatepeople = $_POST['forprivatepeople'];
    $offercountry = $_POST['country'];
    $offerprovince = $_POST['populated-place-add'];
    $offerregion = $_POST['town-area-add'];
    $offerpropertytype = $_POST['property-type'];

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
            break;
        case "garage":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "hotel":
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "house":
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offeryard = $_POST['yard'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "housefloor":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "industrial":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "land":
            $offermethodofuse = $_POST['methodofuse'];
            $offercategory = $_POST['category'];
            $offerrentcontract = $_POST['rentcontract'];
            $offerrentcontractdate = $_POST['rentcontractdate'];
            break;
        case "maisonette":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "office":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "plot":
            $offerregulation = $_POST['regulation'];
            $offerwater = $_POST['water'];
            $offerelectricity = $_POST['electricity'];
            break;
        case "restaurant":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "room1":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "room2":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "room3":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "room4":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
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
            break;
        case "shop":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "storage":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "studio":
            $offerfloorflat = $_POST['floorflat'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
        case "villa":
            $offeryard = $_POST['yard'];
            $offerfloorbuilding = $_POST['floorbuilding'];
            $offerconstructionyear = $_POST['constructionyear'];
            $offerconstructiontype = $_POST['constructiontype'];
            $offergas = $_POST['gas'];
            $offertpp = $_POST['tpp'];
            $offerfurnished = $_POST['furnished'];
            break;
    }
}
/*
// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $additional_info = $_POST['additional_info'];

    // Handling image upload
    //250 кб
    if($_FILES['image']['size'] <= 250000)
    {
        $image = $_FILES['image']['name'];
        $target_dir = "img/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // Inserting data into the database
        $sql = "INSERT INTO `realtor` (`realtor_Name`, `realtor_LastName`, `realtor_PhoneNumber`, `realtor_Experience`, `realtor_Description`, `realtor_Email`) 
                VALUES ('$first_name', '$last_name', '$phone', '$position', '$additional_info', '$email')";

        $result = mysqli_query($con, $sql);
        if ($result) 
        {
            $realtor_id = mysqli_insert_id($con);
            $sql1 = "INSERT INTO `login` (`login_Username`, `login_Pass`, `login_RealtorID`) 
                VALUES ('$username', '$password', '$realtor_id')";
        
            $result1 = mysqli_query($con, $sql1);
            if ($result1) 
            {
                $sql2 = "INSERT INTO `realtor_images` (`realtorimg_Name`, `realtorimg_Url`, `realtorimg_RealtorID`) 
                    VALUES ('$image', '$target_file', '$realtor_id')";
            
                if ($con->query($sql2) === TRUE) 
                {
                    $image_id = mysqli_insert_id($con);
                    $sql3 = "UPDATE `realtor` SET `realtor_ImageID`='$image_id' WHERE `realtor_ID`='$realtor_id'";

                    if ($con->query($sql2) === TRUE) 
                    {
                        header("Location: add-agent.html?Успешно добавихте брокер");
                    }
                    else
                    {
                        header("Location: add-agent.html?Неуспешно променихте imgid");
                    }
                }
                else
                {
                    header("Location: add-agent.html?error=Неуспешно добавихте снимка");
                }
            }
            else
            {
                header("Location: add-agent.html?error=Неуспешно добавихте login");
            }
        } 
        else 
        {
            
        }
    }
    else
    {
        header("Location: add-agent.html?error=Изображението е твърде голямо");
    }
    

    //$con->close();
}