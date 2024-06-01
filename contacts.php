<?php
    session_start();
    include 'db_connection.php';

    $sqlgetlogin = "SELECT * FROM `login` WHERE `login_Username`='admin'";
    $resultgetlogin = mysqli_query($con, $sqlgetlogin);
    $rowgetlogin = mysqli_fetch_assoc($resultgetlogin);
    $sqlgetadmin = "SELECT * FROM `realtor` WHERE `realtor_ID`='".$rowgetlogin['login_RealtorID']."'";
    $resultgetadmin = mysqli_query($con, $sqlgetadmin);
    $rowgetadmin = mysqli_fetch_assoc($resultgetadmin);
    $adminname = $rowgetadmin['realtor_Name'];
    $adminlastname = $rowgetadmin['realtor_LastName'];
    $adminphone = $rowgetadmin['realtor_PhoneNumber'];
    $adminexperience = $rowgetadmin['realtor_Experience'];
    $adminemail = $rowgetadmin['realtor_Email'];
    $admindescription = $rowgetadmin['realtor_Description'];
?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Форум</title>
</head>

<body>
    <!-- navbar start-->
    <div>
        <nav class="navbar short navbar-expand-md p-0">
            <div class="container-fluid beige-background">
                <ul class="navbar-nav justify-content-around">
                    <a href="index.html">
                        <div class="brand-div">
                            <img class="navbar-brand logo" src="./img/logo.png" alt="logo">
                        </div>
                    </a>

                    <button class="navbar-toggler" height="50%;" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse">
                        <li class="nav-item ">
                            <button class="btn btn-lg btn-pill blc"><a href="home.php"
                                    class="nav-link">Начало</a></button>

                        </li>

                        <li class="nav-item ">
                            <div class="dropdown">
                                <button type="button" class="btn btn-lg btn-pill blc dropdown-toggle dropdown-style"
                                    data-bs-toggle="dropdown">
                                    Услуги
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="buy.php">Покупка</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="sell.html">Продажба</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="rent.html">Наемане</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="for-rent.html">Отдаване на наем</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="finance-consulting.html">Финансова консултация</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="legal-consulting.html">Юридическа консултация</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <button class="btn btn-lg btn-pill blc"><a href="" class="nav-link">Услуги</a></button>
                        </li> -->

                        <li class="nav-item ">
                            <button class="btn btn-lg btn-pill blc"><a href="contacts.php"
                                    class="nav-link disabled">Контакти</a></button>
                        </li>

                        <li class="nav-item ">
                            <button class="btn btn-lg btn-pill blc"><a href="about.html" class="nav-link">За
                                    нас</a></button>
                        </li>

                    </div>
                </ul>
                <form class="d-flex justify-content-space-between">
                    <div class="collapse navbar-collapse">
                        <button class="btn btn-lg btn-pill btn-marked blc search-button"><a href="search.html"
                                class="nav-link"><span class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
                        <a class="btn btn-lg btn-pill blc ms-1" href="login.html">
                            <div class="profile-icon d-flex justify-content-center align-items-center"><span
                                    class="fa-solid fa-user fa"></span>
                            </div>
                        </a>
                    </div>
                </form>

            </div>
        </nav>

        <div class="offcanvas offcanvas-end" id="navbarNav" aria-labelledby="sidebar">
            <div class="offcanvas-header beige-background">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body beige-background ps-0 pe-0">
                <ul class="navbar-nav g-3 ms-0 ps-0">
                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="home.php"
                                class="nav-link ps-3">Начало</a></button>
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-lg btn-pill blc w-100 text-start pt-3 pb-3"
                            data-bs-toggle="collapse" data-bs-target="#service">
                            <a class="ps-3">Услуги</a>
                        </button>
                        <div id="service" class="collapse container-fluid p-0">
                            <ul class="navbar-nav w-100 services-nav">
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="buy.php">Покупка</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="sell.html">Продажба</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="rent.html">Наемане</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="for-rent.html">Отдаване на наем</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="finance-consulting.html">Финансова консултация</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="legal-consulting.html">Юридическа консултация</a>
                                    </button>
                                </li>
                            </ul>
                        </div>


                        <!-- <button class="btn btn-lg btn-pill blc" ><a href="" class="nav-link">Услуги</a></button> -->
                    </li>

                    <li class="nav-item ">
                        <button class="btn btn-lg btn-pill blc w-100 text-start removed"><a href="contacts.php"
                                class="nav-link ps-3">Контакти</a></button>
                    </li>

                    <li class="nav-item ">
                        <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="about.html"
                                class="nav-link ps-3">За
                                нас</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill btn-marked blc w-100 text-start"><a href=""
                                class="nav-link ps-3"><span
                                    class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill blc w-100 text-start profile-button">
                            <a href="login.html" class="nav-link ps-3"><span
                                    class="fa-solid fa-user collapse-user-icon fa"></span>Профил</a>
                        </button>
                    </li>

                </ul>

            </div>
        </div>
        <!--navbar end-->


        <div class="container-fluid main-contact-box main-image">
            <div class="title-space">
                <h1 class="primary-color title-font text-center pt-5 pb-5">Контакти</h1>
            </div>
            <div class="main-contacts-space">
                <div class="d-flex justify-content-center">
                    <div class="main-card d-flex flex-row">
                       <div class="main-card-image"><img src="/img/JohnDoe.jpg" alt=""></div>
                       <div class="main-card-info">
                        <h4><?php echo $adminname.' '.$adminlastname ?></h4>
                        <p><?php echo $adminexperience ?></p>
                        <p><?php echo $adminphone ?></p>
                        <p><?php echo $adminemail ?></p>
                        <p><?php echo $admindescription ?></p>
                       </div>
                    </div>

                    <!-- <div class="main-card card">
                        <div class="image-icon-circle"><img src="img/personExample.jpg" alt=""></div>
                        <div class="main-card-body card-body">
                            <h4 class="card-title">Иван Иванов</h4>
                            <p class="card-text">More info
                            </p>
                        </div>
                        <div class="card-button main-profile-button"><a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div> -->

                    <!-- <div class="main-card card">
                        <div class="image-icon-circle"><img src="img/personExample.jpg" alt=""></div>
                        <div class="main-card-body card-body">
                            <h4 class="card-title">Иван Иванов</h4>
                            <p class="card-text">More info
                            </p>
                        </div>
                        <div class="card-button main-profile-button"><a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="g-0 mb-0 ps-0 container-fluid subheading-1">
            <h2 class="text-center mb-0 pb-4 pt-4">Запознайте се с нашите
                    брокери.
            </h2>
        </div>

        

        <div class="container-fluid mt-0 contact-info d-flex-column gap-3">
            <div class="d-grid estate-agents">
        <?php
                
                //zaqvkata e testvana i raboti
                $sqlgetrealtor = "SELECT * FROM `realtor` ORDER BY `realtor_Name` ASC";
                
                $resultgetrealtor = mysqli_query($con, $sqlgetrealtor);
                //nqkolko reda
                
                $realtorscount = mysqli_num_rows($resultgetrealtor) - 1;
                
                $offers = array();
                
                while ($rowgetrealtor = mysqli_fetch_assoc($resultgetrealtor)) 
                {
                    if($rowgetrealtor['realtor_ID'] != 1)
                    {
                        $realtors[] = $rowgetrealtor;
                    }
                }

                for($i = 0; $i < $realtorscount; $i++)
                {
                    $realtor = $realtors[$i];
                    
                    $realtorid = $realtor['realtor_ID'];
                    $realtorname = $realtor['realtor_Name'];
                    $realtorlastname = $realtor['realtor_LastName'];
                    $realtorexperience = $realtor['realtor_Experience'];
                    $realtorphone = $realtor['realtor_PhoneNumber'];
                    $realtoremail = $realtor['realtor_Email'];
                    $realtordescription = $realtor['realtor_Description'];

                    $sqlrealtorimg = "SELECT * FROM `realtor_images` WHERE `realtorimg_RealtorID`='$realtorid'";
                    $resultrealtorimg = mysqli_query($con, $sqlrealtorimg);
                    $rowrealtorimg = mysqli_fetch_assoc($resultrealtorimg);
                    $imgurl = $rowrealtorimg['realtorimg_Url'];

                    echo '<div class="agent">';
                    echo '    <div class="agent-photo">';
                    echo '        <img src="'.$imgurl.'" alt="">';
                    echo '    </div>';
                    echo '    <div class="agent-info">';
                    echo '        <h4 class="agent-name">'.$realtorname.' '.$realtorlastname.'</h4>';
                    echo '        <p class="agent-experience">'.$realtorexperience.'</p>';
                    echo '        <p class="agent-number">'.$realtorphone.'</p>';
                    echo '        <p class="agent-email">'.$realtoremail.'</p>';
                    echo '        <p class="agent-description">'.$realtordescription.'</p>';
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
            <?php
            /*
                <div class="agent">
                    <div class="agent-photo">
                        <img src="" alt="">
                    </div>
                    <div class="agent-info">
                        <h4 class="agent-name">Мирослава Ламбрева</h4>
                        <p class="agent-number">0898989898</p>
                    </div>
                </div>
                */?>
            
            </div>
        </div>
    </div>
    </div>

</body>



</html>