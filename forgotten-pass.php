<?php
    session_start();


    include "db_connection.php";
    $result = '';
    if(isset($_POST['email']))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        if($email == null)
        {
            
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
    $confirmation_code = substr(md5(uniqid(rand(), true)), 0, 10);
    $sql_update_code = "UPDATE login
                        INNER JOIN realtor ON login.login_RealtorID = realtor.realtor_ID
                        SET login.confirmation_code='$confirmation_code'
                        WHERE realtor.realtor_Email='$email'";
    if ($conn->query($sql_update_code) === TRUE) 
    {
         $reset_password_url = "https://example.com/reset-pass.php?code=$confirmation_code";

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
        echo "Грешка при обновяване на кода за потвърждение: " . $conn->error;
    }
    */
    

    
