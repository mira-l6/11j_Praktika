<?php
    session_start();
    include "db_connection.php";
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
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/home-offer.css">
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
                        <button class="btn btn-lg btn-pill blc"><a href="home.php"
                                class="nav-link disabled">Начало</a></button>

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
                                        href="finance-consulting.php">Финансова консултация</a></li>
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
                        <button class="btn btn-lg btn-pill blc"><a href="about.php" class="nav-link">За нас</a>
                        </button>
                    </li>

                </div>
            </ul>
            <form class="d-flex justify-content-space-between">
                <div class="collapse navbar-collapse">
                    <button class="btn btn-lg btn-pill btn-marked blc search-button"><a href="buy.php"
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
                    <button class="btn btn-lg btn-pill blc w-100 text-start removed"><a href="home.php"
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
                                    <a class="nav-link text-start ps-4" href="for-rent.hmtl">Отдаване на наем</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="finance-consulting.php">Финансова консултация</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="legal-consulting">Юридическа консултация</a>
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
                    <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="about.php"
                            class="nav-link ps-3">За
                            нас</a></button>
                </li>

                <li class="nav-item">
                    <button class="btn btn-lg btn-pill btn-marked blc w-100 text-start"><a href="buy.php"
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

    <!-- header start -->
    <section class="main-image d-flex justify-content-center align-items-center flex-column">
        <h1 class="title-font text-center primary-color">Добре дошли!</h1>
        <h1 class="title-font home-title text-center primary-color">Разгледайте нашите оферти!</h1>
        <i style="color: white; font-size: 3em" class="material-icons">expand_more</i>

    </section>
    <!-- header end -->

    <?php
    /*
    <!-- filter start -->
    <section>
        <div class="filter-area pt-5 pb-5 d-flex flex-row justify-content-around">
            <form action="/filter.php/" method="post">
                <div class="filter-box">
                    <div class="filter-option"><label for="property-type">Тип имот</label>
                        <!--падащо меню-->
                        <select id="property-type" name="property-filter">
                            <option value="all">Всички</option>
                            <option value="room1">Едностаен</option>
                            <option value="room2">Двустаен</option>
                            <option value="room3">Тристаен</option>
                            <option value="room4">Четиристаен</option>
                            <option value="roomn">Многостаен</option>
                            <option value="maisonette">Мезонет</option>
                            <option value="studio">Ателие/Таван</option>
                            <option value="office">Офис</option>
                            <option value="store">Магазин</option>
                            <option value="restaurant">Заведение</option>
                            <option value="storage">Склад</option>
                            <option value="hotel">Хотел</option>
                            <option value="industrial">Пром. помещение</option>
                            <option value="business">Бизнес имот</option>
                            <option value="housefloor">Етаж от къща</option>
                            <option value="house">Къща</option>
                            <option value="villa">Вила</option>
                            <option value="plot">Парцел</option>
                            <option value="garage">Гараж</option>
                            <option value="land">Земеделска земя</option>
                        </select>
                    </div>
                    <div class="line-break">
                        <div></div>
                    </div>
                    <div class="filter-option"><label for="populated-place">Населено място</label>
                        <!--падащо меню-->
                        <select id="populated-place" name="property-filter">
                            <option value="all">Всички</option>
                            <option value="outsidebg">Извън България</option>
                            <!--t - grad town; p - oblast province-->
                            <option value="tblagoevgrad">град Благоевград</option>
                            <option value="pblagoevgrad">област Благоевград</option>
                            <option value="tburgas">град Бургас</option>
                            <option value="pburgas">област Бургас</option>
                            <option value="tvarna">град Варна</option>
                            <option value="pvarna">област Варна</option>
                            <option value="tvt">град Велико Търново</option>
                            <option value="pvt">област Велико Търново</option>
                            <option value="tvidin">град Видин</option>
                            <option value="pvidin">област Видин</option>
                            <option value="tvraca">град Враца</option>
                            <option value="pvraca">област Враца</option>
                            <option value="tgabrovo">град Габрово</option>
                            <option value="pgabrovo">област Габрово</option>
                            <option value="tdobrich">град Добрич</option>
                            <option value="pdobrich">област Добрич</option>
                            <option value="tkardjali">град Кърджали</option>
                            <option value="pkardjali">област Кърджали</option>
                            <option value="tkustendil">град Кюстендил</option>
                            <option value="pkustendil">област Кюстендил</option>
                            <option value="tlovech">град Ловеч</option>
                            <option value="plovech">област Ловеч</option>
                            <option value="tmontana">град Монтана</option>
                            <option value="pmontana">област Монтана</option>
                            <option value="tpazardjik">град Пазарджик</option>
                            <option value="ppazardjik">област Пазарджик</option>
                            <option value="tpernik">град Перник</option>
                            <option value="ppernik">област Перник</option>
                            <option value="tpleven">град Плевен</option>
                            <option value="ppleven">област Плевен</option>
                            <option value="tplovdiv">град Пловдив</option>
                            <option value="pplovdiv">област Пловдив</option>
                            <option value="trazgrad">град Разград</option>
                            <option value="prazgrad">област Разград</option>
                            <option value="truse">град Русе</option>
                            <option value="pruse">област Русе</option>
                            <option value="tsilistra">град Силистра</option>
                            <option value="psilistra">област Силистра</option>
                            <option value="tsliven">град Сливен</option>
                            <option value="psliven">област Сливен</option>
                            <option value="tsmolyan">град Смолян</option>
                            <option value="psmolyan">област Смолян</option>
                            <option value="tsofia">град София</option>
                            <option value="psofia">област София</option>
                            <option value="tsz">град Стара Загора</option>
                            <option value="psz">област Стара Загора</option>
                            <option value="ttargovishte">град Търговище</option>
                            <option value="ptargovishte">област Търговище</option>
                            <option value="thaskovo">град Хасково</option>
                            <option value="phaskovo">област Хасково</option>
                            <option value="tshumen">град Шумен</option>
                            <option value="pshumen">област Шумен</option>
                            <option value="tyambol">град Ямбол</option>
                            <option value="pyambol">област Ямбол</option>
                        </select>
                    </div>
                    <div class="line-break">
                        <div></div>
                    </div>
                    <div class="filter-option"><label for="town-area">Район</label>
                        <select id="town-area" name="property-filter">
                            <option>Район</option>
                        </select>
                    </div>
                    <div class="line-break">
                        <div></div>
                    </div>
                    <div class="filter-option"><label for="max-price">Цена (евро)</label>
                        <input type="number" id="max-price" name="property-filter" placeholder="От..."
                            class="min-price">
                        <input type="number" id="min-price" name="property-filter" placeholder="До..."
                            class="max-price">
                    </div>
                    <div class="line-break">
                        <div></div>
                    </div>
                    <div class="filter-option"><label for="quadrature">Квадратура</label>
                        <input type="number" id="quadrature" name="property-filter" placeholder="Въведете...">
                    </div>
                </div>

            </form>

            <div class="filter-search-button">
                <button class="p-3"><i class="material-icons">sort</i>Филтрирай</button>
            </div>
        </div>
    </section>
    <!-- filter end -->
    */?>
    
    <!--Offers start-->
    <section>

        <!--ofertite shte sa grid s povtarqshti se koloni prez razlichnite displei-->
        <!--vseki carousel trqbva da ima otdelno_id-->
        <div class="d-grid offer-display-box">
            <?php
            /*originalen kod
                $sqlgetnewoffer = "SELECT * FROM `offer` ORDER BY `offer_TimeOfUpload` DESC LIMIT 100";
                
                $resultgetnewoffer = mysqli_query($con, $sqlgetnewoffer);
                //nqkolko reda
                
                $offerscount = mysqli_num_rows($resultgetnewoffer);
                
                $offers = array();
                
                while ($rowgetnewoffer = mysqli_fetch_assoc($resultgetnewoffer)) 
                {
                    $offers[] = $rowgetnewoffer;
                }

                for($i = 0; $i < $offerscount; $i++)
                {
                    $offer = $offers[$i];
                    
                    $offertable = $offer['offer_Table'];
                    $_SESSION['offer_Table'] = $offertable;
                    $offerprefix = $offer['offer_Prefix'];
                    $_SESSION['offer_Prefix'] = $offerprefix;
                    $propertyid = $offer['offer_Prefix'] . "_ID";
                    $_SESSION['property_ID'] = $propertyid;
                    $rowgetnewofferid = $offer['offer_PropertyID'];
                    
                    $sqlgetofferobj = "SELECT * FROM `".$offertable."` WHERE `".$propertyid."`='$rowgetnewofferid'";
                    
                    $resultgetofferobj = mysqli_query($con, $sqlgetofferobj);
                    

                    $rowgetofferobj = mysqli_fetch_assoc($resultgetofferobj);
                    
                    $price = $offerprefix.'_Price';
                    $name = $offerprefix.'_City';
                    $province = $offerprefix.'_Province';
                    $region = $offerprefix.'_Region';
                    $offerprice = $rowgetofferobj[$price];
                    $offername = $rowgetofferobj[$name];
                    $offerprovince = $rowgetofferobj[$province];
                    $offerregion = $rowgetofferobj[$region];

                    $picofferid = $offerprefix."_OfferID";
                    $pictable = $offertable . "_images";
                    $piccol = $offerprefix."_Image_Url";
                    $sqlgetpics = "SELECT `$piccol` FROM `".$pictable."` WHERE `".$picofferid."`='$propertyid'";
                    $resultgetpics = mysqli_query($con, $sqlgetpics);
                    $picscount = mysqli_num_rows($resultgetpics);

                    echo '<div class="offer">';
                    echo '<div class="offer-images">';

                    
                    //carousel
                    echo '<div id="offer-carousel-'.$offer['offer_ID'].'" class="carousel slide" data-bs-ride="false">';
                    //indicators

                    //slideshow carousel
                    echo '<div class="carousel-inner">';
                    $pics = array();
                    while ($rowgetpics = mysqli_fetch_assoc($resultgetpics)) 
                    {
                        $pics[] = $rowgetpics;
                    }
                    //masiv s urltata
                    $picurls = array_column($pics, $piccol);
                    //cikul za snimkite
                    for($j = 0; $j < $picscount; $j++)
                    {
                        //$pic = $pics[$j];
                        //$imgurlsess = $offertable.'_Image_Url';
                        $picurl = $picurls[$j];
                        $_SESSION['picurl'] = $picurl;
                        // Active class само за първия елемент на carousel
                        $activeclass = ($j === 0) ? 'active' : '';

                        echo '<div class="carousel-item '.$activeclass.'">';
                        echo '<img src="'.htmlspecialchars($picurl).'" alt="Image '.($j+1).'" class="d-block w-100">';
                        echo '</div>';
                    }
                    echo '</div>';

                    //left and right control items
                    echo '<button class="carousel-control-prev" type="button" data-bs-target="#offer-carousel" data-bs-slide="prev">';
                    echo '<span class="carousel-control-prev-icon"></span>';
                    echo '</button>';
                    echo '<button class="carousel-control-next" type="button" data-bs-target="#offer-carousel" data-bs-slide="next">';
                    echo '<span class="carousel-control-next-icon"></span>';

                    echo '</div>';
                    echo '</div>';
                    //end of carousel

                    echo '<div class="offer-info" onclick="window.location = \'offer.php?id='.htmlspecialchars($offer['offer_ID']).'&table=' . htmlspecialchars($offertable) .'&prefix=' . htmlspecialchars($offerprefix) .'\'">';
                    echo '<h6>Цена: <span>'.$offerprice.'</span> EUR</h6>';
                    echo '<p><span>'.$offername.'</span></p>';
                    echo '<h6>'.$offerprovince.'</h6>';
                    echo '<h6>'.$offerregion.'</h6>';
                    echo '</div>';
                    echo '</div>';
                }*/

                $sqlgetnewoffer = "SELECT * FROM `offer` ORDER BY `offer_TimeOfUpload` DESC LIMIT 100";
                $resultgetnewoffer = mysqli_query($con, $sqlgetnewoffer);
                $offerscount = mysqli_num_rows($resultgetnewoffer);
                $offers = [];

                while ($rowgetnewoffer = mysqli_fetch_assoc($resultgetnewoffer)) 
                {
                    $offers[] = $rowgetnewoffer;
                }

                for ($i = 0; $i < $offerscount; $i++) 
                {
                    $offer = $offers[$i];
                    
                    $offertable = $offer['offer_Table'];
                    $offerprefix = $offer['offer_Prefix'];
                    $propertyid = $offerprefix . "_ID";
                    $rowgetnewofferid = $offer['offer_PropertyID'];

                    // Get offer object
                    $sqlgetofferobj = "SELECT * FROM `$offertable` WHERE `$propertyid` = '$rowgetnewofferid'";
                    $resultgetofferobj = mysqli_query($con, $sqlgetofferobj);
                    $rowgetofferobj = mysqli_fetch_assoc($resultgetofferobj);

                    $price = $offerprefix . '_Price';
                    $name = $offerprefix . '_City';
                    $province = $offerprefix . '_Province';
                    $region = $offerprefix . '_Region';
                    
                    $offerprice = $rowgetofferobj[$price] ?? 'N/A';
                    $offername = $rowgetofferobj[$name] ?? 'N/A';
                    $offerprovince = $rowgetofferobj[$province] ?? '';
                    $offerregion = $rowgetofferobj[$region] ?? '';

                    // Get images
                    $picofferid = $offerprefix . "_OfferID";
                    $pictable = $offertable . "_images";
                    $piccol = $offerprefix . "_Image_Url";
                    
                    // FIXED: use value of property ID, not column name
                    $sqlgetpics = "SELECT `$piccol` FROM `$pictable` WHERE `$picofferid` = '$rowgetnewofferid'";
                    $resultgetpics = mysqli_query($con, $sqlgetpics);
                    $pics = [];
                    while ($rowgetpics = mysqli_fetch_assoc($resultgetpics)) {
                        $pics[] = $rowgetpics[$piccol];
                    }

                    // Start rendering HTML
                    $carouselId = 'offer-carousel-' . $offer['offer_ID'];
                    echo '<div class="offer">';
                    echo '<div class="offer-images">';
                    echo '<div id="' . $carouselId . '" class="carousel slide" data-bs-ride="carousel">';
                    
                    // Carousel items
                    echo '<div class="carousel-inner">';
                    foreach ($pics as $index => $picurl) {
                        $active = $index === 0 ? 'active' : '';
                        echo '<div class="carousel-item ' . $active . '">';
                        echo '<img src="' . htmlspecialchars($picurl) . '" alt="Image ' . ($index + 1) . '" class="d-block w-100">';
                        echo '</div>';
                    }
                    echo '</div>';

                    // Left and right controls with corrected target
                    if (count($pics) > 1) {
                        echo '<button class="carousel-control-prev" type="button" data-bs-target="#' . $carouselId . '" data-bs-slide="prev">';
                        echo '<span class="carousel-control-prev-icon"></span>';
                        echo '</button>';
                        echo '<button class="carousel-control-next" type="button" data-bs-target="#' . $carouselId . '" data-bs-slide="next">';
                        echo '<span class="carousel-control-next-icon"></span>';
                        echo '</button>';
                    }

                    echo '</div>'; // end of carousel
                    echo '</div>'; // end of offer-images

                    // Offer info and link
                    echo '<div class="offer-info" onclick="window.location = \'offer.php?id=' . htmlspecialchars($offer['offer_ID']) . '&table=' . htmlspecialchars($offertable) . '&prefix=' . htmlspecialchars($offerprefix) . '\'">';
                    echo '<h6>Цена: <span>' . $offerprice . '</span> EUR</h6>';
                    echo '<p><span>' . $offername . '</span></p>';
                    echo '<h6>' . $offerprovince . '</h6>';
                    echo '<h6>' . $offerregion . '</h6>';
                    echo '</div>';
                    echo '</div>'; // end of .offer
                }
            ?>

            <!--<div class="offer">
    <div class="offer-images">
        
        <div id="offer-carousel" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/scenery.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/Начало 2.png" alt="Office" class="d-block w-100">
                </div>
            </div>

            
            <button class="carousel-control-prev" type="button" data-bs-target="#offer-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#offer-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
   

    <div class="offer-info" onclick="window.location = 'offer.php'">
        <h6>Цена: <span>10 999</span> EUR</h6>
        <p>Продава <span>3-стаен апартамент</span></p>
        <h6>град Пловдив</h6>
        <h6>квартал Кичука</h6>
    </div>
</div>-->


        

        <!-- <button class="test-button" id="add-button"> Бутон.
        </button>
        <div class="container-fluid ps-3 mt-5" id="offer-flexbox">
            <div class="row gap-3 mb-5">
                <div class="offer-box d-flex-column col-md">
                    <img class="offer-img" src="./img/JohnDoe.jpg">
                    <h5 class="text-center">PriceYay</h5>
                    <p class="text-center">Something or other</p>
                </div>
                <div class="offer-box d-flex-column col-md">
                    <img class="offer-img" src="./img/JohnDoe.jpg">
                    <h5 class="text-center">PriceYay</h5>
                    <p class="text-center">Something or other</p>
                </div>
                <div class="offer-box d-flex-column col-md">
                    <img class="offer-img" src="./img/JohnDoe.jpg">
                    <h5 class="text-center">PriceYay</h5>
                    <p class="text-center">Something or other</p>
                </div>
                <div class="offer-box d-flex-column col-md">
                    <img class="offer-img" src="./img/JohnDoe.jpg">
                    <h5 class="text-center">PriceYay</h5>
                    <p class="text-center">Something or other</p>
                </div>
            </div>


        </div> -->
    </section>
</body>

<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
<script src="./js/filter.js"></script>
<script src="./js/homeFetch.js"></script>

</html>