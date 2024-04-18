<?php
    //?
    //tazi str se izpulnqva pri zapazvane na broker ot buton zapazi
    session_start();


    include "db_connection.php";

    //vsichki poleta isset
    if(isset($_POST['']) && isset($_POST['']))
    {
        //vsichki poleta
        $name = validate($_POST['name']);
        $surname = validate($_POST['surname']);
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);
        $email = validate($_POST['email']);
        $phone = validate($_POST['phone']);
        $experience = validate($_POST['experience']);




        if(empty($name))
        {
            header("Location: add-agent.html?error=Името е задължително!");
            exit();
        }
        else if(empty($surname))
        {
            header("Location: add-agent.html?error=Фамилията е задължителна!");
            exit();
        }
        else if(empty($username))
        {
            header("Location: add-agent.html?error=Потребителското име е задължително!");
            exit();
        }
        else if(empty($password))
        {
            header("Location: add-agent.html?error=Паролата е задължителна!");
            exit();
        }
        else if(empty($email))
        {
            header("Location: add-agent.html?error=Имейлът е задължително!");
            exit();
        }
        else if(empty($phone))
        {
            header("Location: add-agent.html?error=Телефонният номер е задължителен!");
            exit();
        }
        else if(empty($experience))
        {
            header("Location: add-agent.html?error=Потребителското име е задължително!");
            exit();
        }
        else
        {
            //zaqvka za dobavqne na zapis
            //snimkata se dobavq v otdelna forma i shte se obrabotva s upload formata; url i name mogat da sa null
            $sql = "INSERT INTO `realtor`(`realtor_Name`, `realtor_LastName`, `realtor_PhoneNumber`, `realtor_Experience`, `realtor_Description`, `realtor_Email`)
                        VALUES ($name, $lastname, $phonenumber, $experience, $description, $email)"; 
            $result = mysqli_query($con, $sql);
        }
    }
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }