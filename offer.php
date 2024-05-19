<?php
    session_start();
    include "db_connection.php";

    $offerid = $_GET['id'];
    $offertable = $_GET['table'];
    $propertyprefix = $_GET['prefix'];

    $sqlgetoffer = "SELECT * FROM `offer` WHERE `offer_ID`='$offerid'";
    $resultgetoffer = mysqli_query($con, $sqlgetoffer);
    $rowgetoffer = mysqli_fetch_assoc($resultgetoffer);
    $propertyid = $rowgetoffer['offer_PropertyID'];

    $sqlgetproperty = "SELECT * FROM `".$offertable."` WHERE `".$propertyprefix."_ID`='$propertyid'";

    $resultgetproperty = mysqli_query($con, $sqlgetproperty);
    $rowgetproperty = mysqli_fetch_assoc($resultgetproperty);
    

        $price = $rowgetproperty[$propertyprefix.'_Price'];
        $realtorid = $rowgetproperty[$propertyprefix.'_RealtorID'];
        $quadrature = $rowgetproperty[$propertyprefix.'_Quadrature'];
        $_SESSION['FloorFlat'] = $row['business_FloorBuilding'];
        $_SESSION['Gas'] = $row['business_Gas'];
        $_SESSION['Tpp'] = $row['business_Tpp'];
        $_SESSION['ConstructionYear'] = $row['business_ConstructionYear'];
        $_SESSION['ConstructionType'] = $row['business_ConstructionType'];
        $_SESSION['Description'] = $row['business_Description'];
        $_SESSION['Features'] = $row['business_Features'];
        $_SESSION['ForPrivatePeople'] = $row['business_ForPrivatePeople'];
        $_SESSION['Furnished'] = $row['business_Furnished'];
        $_SESSION['Country'] = $row['business_Country'];
        $_SESSION['Province'] = $row['business_Province'];
        $_SESSION['City'] = $row['business_City'];
        $_SESSION['Region'] = $row['business_Price'];
        $_SESSION['Type'] = $row['business_Type'];
        $_SESSION['PropertyType'] = $row['business_PropertyType'];
        $_SESSION['UploadTime'] = $row['business_UploadTime'];
    

    
    $realtorid = $rowgetproperty[$propertyprefix.'_RealtorID'];
    $sqlgetrealtor = "SELECT * FROM `realtor` WHERE `realtor_ID`='$realtorid";
    $resultgetrealtor = mysqli_query($con, $sqlgetrealtor);
    $rowgetrealtor = mysqli_fetch_assoc($resultgetrealtor);
    

?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/offer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Начало</title>
</head>

<body>
    <!-- nav start -->

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
                        <button class="btn btn-lg btn-pill blc"><a href="home.php" class="nav-link">Начало</a></button>

                    </li>

                    <li class="nav-item ">
                        <div class="dropdown">
                            <button type="button" class="btn btn-lg btn-pill blc dropdown-toggle dropdown-style"
                                data-bs-toggle="dropdown">
                                Услуги
                            </button>
                            <ul class="dropdown-menu">
                                <li class="nav-item p-1"><a class="dropdown-item nav-link" href="buy.html">Покупка</a>
                                </li>
                                <li class="nav-item p-1"><a class="dropdown-item nav-link" href="sell.html">Продажба</a>
                                </li>
                                <li class="nav-item p-1"><a class="dropdown-item nav-link" href="rent.html">Наемане</a>
                                </li>
                                <li class="nav-item p-1"><a class="dropdown-item nav-link" href="for-rent.html">Отдаване
                                        на наем</a></li>
                                <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                        href="finance-consulting.html">Финансова консултация</a></li>
                                <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                        href="legal-consulting.html">Юридическа консултация</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <button class="btn btn-lg btn-pill blc"><a href="" class="nav-link">Услуги</a></button>
                        </li> -->

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill blc"><a href="contacts.html"
                                class="nav-link">Контакти</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill blc"><a href="about.html" class="nav-link">За нас</a>
                        </button>
                    </li>

                </div>
            </ul>
            <form class="d-flex justify-content-space-between">
                <div class="collapse navbar-collapse">
                    <button class="btn btn-lg btn-pill btn-marked blc search-button"><a href="search.html"
                            class="nav-link"><span class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
                    <a class="btn btn-lg btn-pill blc ms-1" href="login.html">
                        <div class="profile-icon d-flex justify-content-center align-items-center"><span
                                class="fa-solid fa-user fa"></span></div>
                    </a>
                </div>
            </form>

        </div>
    </nav>

    <div class="offcanvas offcanvas-end" id="navbarNav" aria-labelledby="sidebar">
        <div class="offcanvas-header beige-background">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body beige-background ps-0 pe-0">
            <ul class="navbar-nav g-3 ms-0 ps-0">
                <li class="nav-item">
                    <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="home.php"
                            class="nav-link ps-3">Начало</a></button>
                </li>

                <li class="nav-item">
                    <button type="button"
                        class="btn btn-lg btn-pill blc w-100 text-start collapsed-dropdown-style pt-3 pb-3"
                        data-bs-toggle="collapse" data-bs-target="#service">
                        <a class="ps-3">Услуги</a>
                    </button>
                    <div id="service" class="collapse container-fluid p-0">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Покупка</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Продажба</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Наемане</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Отдаване на наем</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Финансова консултация</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="#">Юридическа консултация</a>
                                </button>
                            </li>
                        </ul>
                    </div>


                    <!-- <button class="btn btn-lg btn-pill blc" ><a href="" class="nav-link">Услуги</a></button> -->
                </li>

                <li class="nav-item">
                    <button class="btn btn-lg btn-pill blc w-100 text-start">
                        <a href="contacts.html" class="nav-link ps-3">Контакти</a>

                    </button>
                </li>

                <li class="nav-item">
                    <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="about.html"
                            class="nav-link ps-3">За
                            нас</a></button>
                </li>

                <li class="nav-item">
                    <button class="btn btn-lg btn-pill btn-marked blc w-100 text-start"><a href=""
                            class="nav-link ps-3"><span class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
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
    <!-- nav end -->

    <div class="container-fluid offer-images">
        <div class="first big-image">
            <img src="img/9ec19d18-107e-41f9-bddf-4fc03411b2b5.webp" alt="">
        </div>
        <div class="small-image small-image-1"><img src="/img/download (5).jpg" alt=""></div>
        <div class="small-image small-image-2"><img src="img/download (2).jpg" alt=""></div>
        <div class="small-image small-image-3"><img src="img/download (4).jpg" alt=""></div>
        <div class="small-image small-image-4"><img src="img/download (6).jpg" alt=""></div>
        <div class="second big-image">
            <img src="img/1677856812_en-idei-club-p-inside-the-house-dizain-1.jpg" alt="">
        </div>
    </div>
    <div class="offer-header row p-4 mb-1">
        <div class="col-8">
            <!--zaglavie na obqwata-->
            <h3><?php echo $_SESSION['City'] ?></h3>
        </div>
        <div class="col-4">
            <h4>Цена: <span><?php echo $price ?></span> EUR</h4>
        </div>
    </div>
    <div class="offer-info mb-1 p-4 row">
        <div class="col-6 offer-subinfo d-flex flex-column justify-content-center">
            <h4 class="p-2">Обща информация:</h5>
                <div class="p-2">
                    <p>Квадратура: <?php echo $_SESSION['Quadrature'] ?></p>
                    <p>Етаж: </p>
                    <p>Строителство: </p>
                </div>
        </div>
        <div class="col-6 offer-agent d-flex align-items-center">
            <div class="offer-agent-image">
                <img src="" alt="">
            </div>
            <div class="ps-5">
                <h5><?php echo $rowgetrealtor['realtor_Name'] ?></h5>
                <h5><?php echo $rowgetrealtor['realtor_Experience'] ?></h5>
                <p><span style="font-weight: 600">Телефон:</span> <?php echo $rowgetrealtor['realtor_PhoneNumber'] ?></p>
                <p><span style="font-weight: 600">Имейл:</span> <?php echo $rowgetrealtor['realtor_Email'] ?></p>
            </div>
        </div>
    </div>
    <div class="offer-description p-4 mb-1">
        <h4>Описание на имота: </h4>
        <p><?php echo $_SESSION['Description'] ?>
        </p>
    </div>
    <div class="offer-contact p-4">
        <h4>Оставете запитване:</h4>
        <form action="" method="post" class="offer-contact-form">
            <textarea name="" id="" class="w-100 rounded-2 form-control"></textarea>
        </form>
        <div>
            <form action="" class="row">
                <div class="col-6 offer-form-area">
                    <label for="">Имейл: </label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-6 offer-form-area">
                    <label for="">Телефон за връзка: </label>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>
    </div>
</body>

</html>