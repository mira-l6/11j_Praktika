<?php

    //?
    session_start();


    include "db_connection.php";

    //promenlivi za navigaciqta
    $header = "https://forumimotibg.com/adminprofile.html";
    $replace = true;

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if(empty($username))
        {
            header("Location: login.html?error=Потребителското име е задължително!");
            exit();
        }
        else if(empty($password))
        {
            header("Location: login.html?error=Паролата е задължителна!");
            exit();
        }
        else
        {
            $sql = $mysqli->execute_query("SELECT * FROM `login` WHERE `login_Username`=? AND `login_Pass`=?", [$username, $password]); 
            echo "$ sql querito";
            $result = mysqli_query($con, $sql);
            echo "vlizam v ifa";
            if(mysqli_num_rows($result) === 1)
            {
                $row = mysqli_fetch_assoc($result);
                echo "vzimam red";
                //print_r($row);
                if($row['login_Username'] === $username && $row['login_Pass'] === $password)
                {
                    $_SESSION['login_ID'] = $row['login_ID'];
                    $_SESSION['login_Username'] = $row['login_Username'];
                    $_SESSION['login_Pass'] = $row['login_Pass'];
                    $_SESSION['login_RealtorID'] = $row['login_RealtorID'];
                    
                    if($row['login_Username'] === "admin")
                    {
                        header("Location: adminprofile.html");
                        exit();
                    }
                    else
                    {
                        header("Location: profile.html");
                        exit();
                    }                   
                }
                else
                {
                    echo "Ups";
                    header("Location: login.html?error=Грешно потребителско име или парола");
                    exit();
                }
            }
            else
            {
                header("Location: login.html?error=Грешно потребителско име или парола");
                exit();
            }
        }
    }
    else
    {
        header("Location: login.html?не бачкам");
        exit();
    }
    