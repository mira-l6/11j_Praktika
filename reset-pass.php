<?php
session_start();

include "db_connection.php";


    if (isset($_POST['password']) && isset($_POST['confirm_password']))
    {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if(empty($password)) 
        {
            header("Location: reset-pass.html?error=Въведете парола!");
            exit();
        } elseif(empty($confirm_password)) 
        {
            header("Location: reset-pass.html?error=Въведете повторно паролата!");
            exit();
        }

        if ($password === $confirm_password)
        {
            if (isset($_GET['code']))
            {
                $confirmation_code = $_GET['code'];//vzima koda ot URL-a na stranicata
                $sql = "UPDATE login SET login_Pass = '$password' 
                        WHERE confirmation_code = '$confirmation_code'";
                        
                if ($con->query($sql) === TRUE)
                {
                    echo "Паролата е успешно обновена.";
                }
                else
                {
                    echo "Грешка при обновяване на паролата: " . $con->error;
                }        
            }
            else
            {
                echo "Location: reset-pass.html?error=Липсва код за потвърждение.";
            }
        }
        else
        {
            echo "Location: reset-pass.html?error=Паролите не съвпадат.";
        }
    }
    else
    {
        echo "Location: reset-pass.html?error=Липсват данни за възстановяване на паролата.";
    }

