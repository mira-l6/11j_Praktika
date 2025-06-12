<?php
    session_start();
    include "db_connection.php";

    //vsichki poleta isset
    //snimkata da se dobavq s otdelna forma chrez upload.php
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['experience']))
    {
        //vsichki poleta
        $name = validate($_POST['name']);
        $surname = validate($_POST['surname']);
        $username = validate($_POST['username']);
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
        else if(empty($email))
        {
            header("Location: add-agent.html?error=Имейлът е задължителен!");
            exit();
        }
        else if(empty($phone))
        {
            header("Location: add-agent.html?error=Телефонният номер е задължителен!");
            exit();
        }
        else if(empty($experience))
        {
            header("Location: add-agent.html?error=Длъжността е задължителна!");
            exit();
        }
        else
        {
            //zaqvka za promqna na zapis
            //snimkata se dobavq v otdelna forma i shte se obrabotva s upload formata; url i name mogat da sa null

            $sqlcheck = "SELECT `login_RealtorID` FROM `login` WHERE `login_Username` = '$username'";
            $resultsqlcheck = mysqli_query($con, $sqlcheck);
            if($resultsqlcheck)
            {
                header("Location: add-agent.html?error=Потребителското име е заето!");
                exit();
            }

            $realtor_id = $_SESSION['login_RealtorID'];
            $sql = "UPDATE `realtor`
                        SET
                        `realtor_Name` = '$name',
                        `realtor_LastName` = '$surname',
                        `realtor_PhoneNumber` = '$phone',
                        `realtor_Experience` = '$experience',
                        `realtor_Email` = '$email'
                        WHERE `realtor_ID` = '$realtor_id'"; 
                        //kak da se pazi id na vlezliqt broker; potr ime da ne se promenq?
            $result = mysqli_query($con, $sql);

            $sqllogin = "UPDATE `login`
                            SET
                            `login_Username` = '$username'
                            WHERE `login_RealtorID` = '$realtor_id'";
            $resultlogin = mysqli_query($con, $sqllogin);

            header("Location: add-agent.html?error=Данните са обновени!");
            exit();
        }
    }
    
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }