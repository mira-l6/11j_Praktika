<?php
    session_start();


    include "db_connection.php";
    $result = '';
    if(isset($_POST['email']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        if(empty($email))
        {
            header("Location: forgotten-pass.html?error= Имейлът е задължителен!");
            exit();
        }
        else
        {
            $sql = "SELECT realtor_Email FROM realtor
            JOIN  login 
            WHERE login.login_RealtorID = realtor.realtor_ID; ";
            if(!$sql->num_rows > 0)
            {

            }
            else
            {
                $recoverycode = uniqid(true); 
            }

        }
    }

    /*
    include "db_connection.php";
    if(isset($_POST['email']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $sql_check_email = "SELECT realtor.realtor_Email FROM realtor WHERE realtor.realtor_Email='$email'";
        $result_check_email = $con->query($sql_check_email);
        if ($result_check_email->num_rows > 0) 
        {
            $confirmation_code = substr(md5(uniqid(rand(), true)), 0, 10);
            $sql_update_code = "UPDATE login
                                INNER JOIN realtor ON login.login_RealtorID = realtor.realtor_ID
                                SET login.confirmation_code='$confirmation_code'
                                WHERE realtor.realtor_Email='$email'";
            if ($con->query($sql_update_code) === TRUE) 
            {
                $reset_password_url = "https://forumimotibg.com/reset-pass.php?code=$confirmation_code";

                $to = $email;
                $subject = 'Нулиране на парола';
                $message = "За да нулирате паролата си, моля, посетете следния линк: $reset_password_url";
                $headers = 'From: nqkakyvimeil@gmail.com' . "\r\n" .
                'Reply-To: nqkakyv imeil@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);

                echo "Инструкциите за нулиране на паролата бяха изпратени на вашия имейл.";
            }
            else
            {
                echo "Грешка при обновяване на кода за потвърждение: " . $con->error;
            }
        }
        else
        {
            header("Location: forgotten-pass.html?error= Такъв имейл не съществува в базата данни!");
            exit();
        }
    }
    */
    

    
