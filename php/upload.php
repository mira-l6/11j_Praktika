<?php
    //za uploadvane na snimki

    if(isset($_POST['submit']) && isset($_FILES['my_image']))
    {
        include "db_connection.php";
        header("Location: ");
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if($error === 0)
        {
            //kakuv razmer snimki
            if($img_size > 0)
            {
                $em = "Sorry, your file is too large!";
                //??? kude da vodi
                header("Location: index.php/?error=$em");
            }
            else
            {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                //koi razshireniq sa razresheni
                $allowed_exs = array("jpg");

                if(in_array($img_ex_lc, $allowed_exs))
                {
                    $new_img_name = uniqid("IMG-", ).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    //Dobavqne v bazata danni
                    //moje razl zaqvki da se krustqt po razl nachin
                    $sql = "INSERT INTO tablica(image_url) VALUES('$new_img_name')";
                    mysqli_query($con, $sql);
                    header("Location: ");
                }
                else
                {
                    $em = "You can't upload files of this type!";
                    //??? kude da vodi
                    header("Location: index.php/?error=$em");
                }
            }
            
            $em = "Unknown error occurred!";
            //??? kude da vodi
            header("Location: index.php/?error=$em");
        }
        else
        {
            header("Location: ");
        }
    }