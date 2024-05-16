<?php
    //?
    session_start();

    include "db_connection.php"; 


   if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($username)) {
        header("Location: login.html?error=Потребителското име е задължително!");
        exit();
    } elseif(empty($password)) {
        header("Location: login.html?error=Паролата е задължителна!");
        exit();
    } else {
        $sql = "SELECT * FROM `login` WHERE `login_Username`='$username' AND `login_Pass`='$password'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if($row['login_Username'] === $username && $row['login_Pass'] === $password) {
                $_SESSION['login_ID'] = $row['login_ID'];
                $_SESSION['login_Username'] = $row['login_Username'];
                $_SESSION['login_Pass'] = $row['login_Pass'];
                $_SESSION['login_RealtorID'] = $row['login_RealtorID'];

                $realtorid = $_SESSION['login_RealtorID'];
                
                $sqlgetrealtor = "SELECT * FROM `realtor` WHERE `realtor_ID`='$realtorid'";
                $resultgetrealtor = mysqli_query($con, $sqlgetrealtor);
                if(mysqli_num_rows($result) === 1)
                {
                    $rowgetrealtor = mysqli_fetch_assoc($resultgetrealtor);

                    $_SESSION['name'] = $rowgetrealtor['realtor_Name'];
                    $_SESSION['lastname'] = $rowgetrealtor['realtor_LastName'];
                    $_SESSION['email'] = $rowgetrealtor['realtor_Email'];
                    $_SESSION['phone'] = $rowgetrealtor['realtor_PhoneNumber'];
                    $_SESSION['experience'] = $rowgetrealtor['realtor_Experience'];
                    $_SESSION['description'] = $rowgetrealtor['realtor_Description'];
                }
                

                if($row['login_Username'] === "admin") {
                    header("Location: adminprofile.php");
                    exit();
                } else {
                    header("Location: profile.php");
                    
                }                   
            } else {
                header("Location: login.html?error=Грешно потребителско име или парола");
                exit();
            }
        } else {
            header("Location: login.html?error=Грешно потребителско име или парола");
            exit();
        }
    }
} else {
    header("Location: login.html?не бачкам");
    exit();
}