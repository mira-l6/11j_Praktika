<?php
include "db_connection.php";



// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $additional_info = $_POST['additional_info'];

    // Handling image upload
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    // Inserting data into the database
    $sql = "INSERT INTO `realtor` (`realtor_Name`, `realtor_LastName`, `realtor_PhoneNumber`, `realtor_Experience`, `realtor_Description`, `realtor_Email`) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$phone', '$position', '$additional_info', '$image')";

    if ($con->query($sql) === TRUE) {
        echo "Новият брокер е добавен успешно!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    //$con->close();
}
