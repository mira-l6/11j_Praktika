<?php

    //?
    session_start();


    include "db_connection.php";
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
            $sql = "SELECT * FROM `login` WHERE `login_Username`='$username' AND `login_Pass`='$password'"; 
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) === 1)
            {
                $row = mysqli_fetch_assoc($result);
                //print_r($row);
                if($row['login_Username'] === $username && $row['login_Pass'] === $password)
                {
                    $_SESSION['login_ID'] = $row['login_ID'];
                    $_SESSION['login_Username'] = $row['login_Username'];
                    $_SESSION['login_Pass'] = $row['login_Pass'];
                    $_SESSION['login_RealtorID'] = $row['login_RealtorID'];
                    //?
                    //if username == admin location: druga
                    if($username==='admin')
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
        header("Location: login.html");
        exit();
    }