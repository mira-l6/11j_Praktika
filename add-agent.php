<?php
    //?
    //tazi str se izpulnqva pri zapazvane na broker ot buton zapazi
    session_start();


    include "db_connection.php";

    //vsichki poleta isset
    //snimkata da se dobavq s otdelna forma chrez upload.php
    if(isset($_POST['agent-first-name']) && isset($_POST['agent-last-name']) && isset($_POST['agent-email']) && isset($_POST['agent-password']) && isset($_POST['agent-phone']) && isset($_POST['agent-position']) && isset($_POST['agent-description']))
    {
        //vsichki poleta
        $name = trim($_POST['agent-first-name']);
        $surname = trim($_POST['agent-last-name']);
        $username = trim($_POST['agent-email']);
        $password = trim($_POST['agent-password']);
        $email = trim($_POST['agent-phone']);
        $phone = trim($_POST['agent-position']);
        $experience = trim($_POST['agent-description']);


            //zaqvka za dobavqne na zapis
            //snimkata se dobavq v otdelna forma i shte se obrabotva s upload formata; url i name mogat da sa null
            $sql = "INSERT INTO `realtor`(`realtor_Name`, `realtor_LastName`, `realtor_PhoneNumber`, `realtor_Experience`, `realtor_Description`, `realtor_Email`)
                        VALUES ('$name', '$lastname', '$phonenumber', '$experience', '$description', '$email')"; 
            $result = mysqli_query($con, $sql);

            
    }
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }