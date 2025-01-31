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

$sqlgetproperty = "SELECT * FROM `" . $offertable . "` WHERE `" . $propertyprefix . "_ID`='$propertyid'";

$resultgetproperty = mysqli_query($con, $sqlgetproperty);
$rowgetproperty = mysqli_fetch_assoc($resultgetproperty);

$price = $rowgetproperty[$propertyprefix . '_Price'];
$realtorid = $rowgetproperty[$propertyprefix . '_RealtorID'];
$quadrature = $rowgetproperty[$propertyprefix . '_Quadrature'];
$floorflat = $rowgetproperty[$propertyprefix . '_FloorFlat'];
$floorbuilding = $rowgetproperty[$propertyprefix . '_FloorBuilding'];
$gas = $rowgetproperty[$propertyprefix . '_Gas'];
$tpp = $rowgetproperty[$propertyprefix . '_Tpp'];
$constructionyear = $rowgetproperty[$propertyprefix . '_ConstructionYear'];
$constructiontype = $rowgetproperty[$propertyprefix . '_ConstructionType'];
$description = $rowgetproperty[$propertyprefix . '_Description'];
$features = $rowgetproperty[$propertyprefix . '_Features'];
$furnished = $rowgetproperty[$propertyprefix . '_Furnished'];
$country = $rowgetproperty[$propertyprefix . '_Country'];
$province = $rowgetproperty[$propertyprefix . '_Province'];
$city = $rowgetproperty[$propertyprefix . '_City'];
$region = $rowgetproperty[$propertyprefix . '_Region'];
$propertytype = $rowgetproperty[$propertyprefix . '_Type'];
$uploadtime = $rowgetproperty[$propertyprefix . '_UploadTime'];


    $sqlgetrealtor = "SELECT * FROM `realtor` WHERE `realtor_ID`='$realtorid'";
    $resultgetrealtor = mysqli_query($con, $sqlgetrealtor);
    $rowgetrealtor = mysqli_fetch_assoc($resultgetrealtor);
    $realtorname = $rowgetrealtor['realtor_Name'];
    $realtorlastname = $rowgetrealtor['realtor_LastName'];
    $realtornumber = $rowgetrealtor['realtor_PhoneNumber'];
    $realtoremail = $rowgetrealtor['realtor_Email'];

?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/offer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Форум</title>
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
                                <li class="nav-item p-1"><a class="dropdown-item nav-link" href="buy.php">Покупка</a>
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
                        <button class="btn btn-lg btn-pill blc"><a href="contacts.php"
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

                <li class="nav-item">
                    <button class="btn btn-lg btn-pill blc w-100 text-start">
                        <a href="contacts.php" class="nav-link ps-3">Контакти</a>

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

    <!--popup neshta moje i da gi mahna-->
    <div class="popup">
        <div class="top-bar">
            <i class="close-btn material-icons" style="color: white">clear</i>
        </div>
        <button class="arrow-btn left-arrow"><i class="material-icons popup-arrow">arrow_back</i></button>
        <button class="arrow-btn right-arrow"><i class="material-icons popup-arrow">arrow_forward</i></button>
        <!--vsichki snimki shte sa tuk-->
        <img src="img/contacts_background.png" alt="" class="large-image">
    </div>
    <!--kraj na popup-->


    <div class="container-fluid offer-images">
        <div class="first big-image">
            <img src="img/9ec19d18-107e-41f9-bddf-4fc03411b2b5.webp" alt="">
        </div>
        <div class="small-image small-image-1"><img src="/img/aqualand.jpg" alt=""></div>
        <div class="small-image small-image-2"><img src="img/aqualand1.jpg" alt=""></div>
        <div class="small-image small-image-3"><img src="img/aqualand3.jpg" alt=""></div>
        <div class="small-image small-image-4"><img src="img/aqualand4.jpg" alt=""></div>
        <div class="second big-image">
            <img src="img/1677856812_en-idei-club-p-inside-the-house-dizain-1.jpg" alt="">
        </div>
    </div>

    <!--carousel za vsichi snimki, toj shte se pokazva samo na malak enkran-->
    <div id="offer-images-carousel" class="carousel slide offer-images-carousel" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#offer-images-carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#offer-images-carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#offer-images-carousel" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/contacts_background.png" alt="Los Angeles" class="carousel-image d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/scenery.jpg" alt="Chicago" class="carousel-image d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/Начало 2.png" alt="New York" class="carousel-image d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#offer-images-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#offer-images-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!--kraj na carousel-->


    <div class="offer-header row p-4 mb-1">
        <div class="col-8">
            <!--zaglavie na obqwata-->
            <h3><?php echo $city ?></h3>
        </div>
        <div class="col-4">
            <h4>Цена: <span><?php echo $price ?></span> EUR</h4>
        </div>
    </div>
    <div class="offer-info mb-1 p-4 row">
        <div class="col-6 offer-subinfo d-flex flex-column justify-content-center">
            <h4 class="p-2">Обща информация:</h4>
                <div class="p-2">
                    <?php
                        if($province)
                        {
                            echo '<p>Местоположение: '.$province . ', ' . $region.'</p>';
                        }
                        if($constructiontype)
                        {
                            echo '<p>Строителство: '.$constructiontype . ', ' . $constructionyear.'</p>';
                        }
                        if($floorflat && $floorbuilding)
                        {
                            echo '<p>Етаж: ' . $floorflat . ' от ' . $floorbuilding . '</p>';
                        }
                        else if(!$floorflat && $floorbuilding)
                        {
                            echo '<p>Етажи: ' . $floorbuilding . '</p>';
                        }
                        if($quadrature)
                        {
                            echo '<p>Квадратура: ' . $quadrature . '</p>';
                        }
                        //features?
                        //for prvt people, furnished, gas, tpp

                        switch ($offertable)
                        {
                            case "business_property":
                                $businesstype = $rowgetproperty['business_Type'];
                                echo '<p>Тип имот: ' . $businesstype . '</p>';
                                break;
                            case "garage":
                                break;
                            case "hotel":
                                break;
                            case "house":
                                $houseyard = $rowgetproperty['house_Yard'];
                                echo '<p>Двор: ' . $houseyard . '</p>';
                                break;
                            case "house_floor":
                                break;
                            case "industrial_premise":
                                break;
                            case "land":
                                $methodofuse = $rowgetproperty['land_MethodOfUse'];
                                echo '<p>Предназначение: ' . $methodofuse . '</p>';
                                $landcategory = $rowgetproperty['land_Category'];
                                echo '<p>Категория: ' . $landcategory . '</p>';
                                $rent = $rowgetproperty['land_RentContract'];
                                $rentcontractdate = $rowgetproperty['land_RentContractDate'];
                                if($rent === 1)
                                {
                                    echo '<p>Рента: ДА</p>';
                                    if($rentcontractdate)
                                    {
                                        echo '<p>Рента: ' . $rentcontractdate . '</p>';
                                    }
                                }
                                else if($rent === 0)
                                {
                                    echo '<p>Рента: НЕ</p>';
                                }
                        
                                break;
                            case "maisonette":
                                break;
                            case "office":
                                break;
                            case "plot":
                                $regulation = $rowgetproperty['plot_Regulation'];
                                if($regulation)
                                {
                                    echo '<p>Регулация: ДА</p>';
                                }
                                $water = $rowgetproperty['plot_Water'];
                                if($water)
                                {
                                    echo '<p>Вода: ДА</p>';
                                }
                                $electricity = $rowgetproperty['plot_Electricity'];
                                if($electricity)
                                {
                                    echo '<p>Електричество: ДА</p>';
                                }
                                
                                break;
                            case "restaurant":
                                break;
                            case "room1":
                                break;
                            case "room2":
                                break;
                            case "room3":
                                break;
                            case "room4":
                                break;
                            case "roomn":
                                $rooms = $rowgetproperty['roomn_Rooms'];
                                echo '<p>Брой стаи: ' . $rooms . '</p>';
                                break;
                            case "shop":
                                break;
                            case "storage":
                                break;
                            case "studio":
                                break;
                            case "villa":
                                $villayard = $rowgetproperty['villa_Yard'];
                                echo '<p>Двор: ' . $villayard . '</p>';
                                break;
                        }
                        echo '<p class="features">Особености: <span id="features" class="subinfo-input">' . $features . '</span></p>';
                    ?>
                </div>

                <div class="long-info">
                    <ul class="checkboxes-list d-flex flex-row">
                        <?php
                            if($gas)
                            {
                                echo '<li class="gas"><span id="gas" class="subinfo-input">Газ</span></li>';
                            }
                            if($tpp)
                            {
                                echo '<li class="tpp"><span id="tpp" class="subinfo-input">ТЕЦ</span></li>';
                            }
                            if($forprivatepeople)
                            {
                                echo '<li class="for-private-people"><span id="for-private-people" class="subinfo-input">За частни лица</span></li>';
                            }
                            if($furnished)
                            {
                                echo '<li class="furnished"><span id="furnished" class="subinfo-input">Обзаведен</span></li>';
                            }
                        ?>
                    </ul>
                </div>
        </div>
        <div class="col-6 offer-agent d-flex align-items-center">
            <div class="offer-agent-image">
                <?php
                    $sqlimg = "SELECT `realtorimg_Url` FROM `realtor_images` WHERE `realtorimg_RealtorID`='". $realtorid . "'";
                    $resultimg = mysqli_query($con, $sqlimg);
                    $rowimg = mysqli_fetch_assoc($resultimg);

                    echo '<img src="./' . $rowimg['realtorimg_Url'] . '" alt="">';
                ?>
                
            </div>
            <div class="ps-5">
                <h5><?php echo $realtorname ?></h5>
                <h5><?php echo $realtorlastname ?></h5>
                <p><span style="font-weight: 600">Телефон:</span> <?php echo $realtornumber ?>
                </p>
                <p><span style="font-weight: 600">Имейл:</span> <?php echo $realtoremail ?></p>
            </div>
        </div>
    </div>
    <div class="offer-description p-4 mb-1">
        <h4>Описание на имота: </h4>
        <p><?php echo $description ?>
        </p>
    </div>
    <div class="offer-contact p-4">
        <h4>Оставете запитване:</h4>
        
        <div>
        <form action="" method="post" class="offer-contact-form">
            <textarea name="" id="" class="w-100 rounded-2 form-control"></textarea>
        </form>
            <form action="" class="row">
                <div class="col-6 offer-form-area">
                    <label for="">Имейл: </label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-6 offer-form-area">
                    <label for="">Телефон: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-lg submit">Изпрати</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>