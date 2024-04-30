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
