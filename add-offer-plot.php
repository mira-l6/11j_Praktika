<?php
    //?
    //tazi str se izpulnqva pri zapazvane na parcel ot buton zapazi
    session_start();


    include "db_connection.php";

    //offername shte se suhranqva v kolonata city
    if(isset($_POST['offername']) && isset($_POST['price']) && isset($_POST['quadrature']) && isset($_POST['floors']) && isset($_POST['property-type']) && isset($_POST['country']) && isset($_POST['populated-place']) && isset($_POST['town-area-add-hotel']) && isset($_POST['description']) /*features e незадължително поле; checkboks sa ili 1, ili 0 => nqma da se proverqva s isset*/)
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
        $propertytype = validate($_POST['property-type']);
        $country = validate($_POST['country']);
        $populatedplace = validate($_POST['populated-place-add']);
        $townarea = validate($_POST['town-area-add']);
        $description = validate($_POST['description']);
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
        else if(empty($propertytype))
        {
            header("Location: login.html?error=Типът на имота е задължителен!");
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
            $sql = "INSERT INTO `plot`(`plot`, `plot_Quadrature`, `hotel_Description`, `hotel_Features`, `hotel_ForPrivatePeople`, `Furnished`, `hotel_Country`, `hotel_Province`, `plot_City`, `plot_Region`, `plot_Type`)
                        VALUES ($price, $quadrature, $floors, $gas, $tpp, $constructionyear, $constructiontype, $description, $features, $forprivatepeople, $furnished, $country, $populatedplace, $offername, $townarea, $propertytype)"; 
            $result = mysqli_query($con, $sql);
            exit();
        }
    }
    else
    {
        header("Location: add-offer-business.html?не бачкам");
        exit();
    }