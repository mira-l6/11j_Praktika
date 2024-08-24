<?php
//Втори код работещ за една форма

session_start();
include "db_connection.php";



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