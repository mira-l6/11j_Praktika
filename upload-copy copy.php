<?php
    session_start();
    include "db_connection.php";
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
                    
                    $sql_img = "INSERT INTO `business_property_images` (`business_Image_Url`, `business_Image_Name`, `business_OfferID`) VALUES ('$target_file', '$image_name', '$offer_id')";
                    /*
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