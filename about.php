<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="image/x-icon" href="/img/logo.png"> -->
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Форум</title>
</head>

<body>
    <!-- navbar start -->
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
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="buy.php">Покупка</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="sell.html">Продажба</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="rent.html">Наемане</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="for-rent.html">Отдаване на наем</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="finance-consulting.php">Финансова консултация</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link"
                                            href="legal-consulting.php">Юридическа консултация</a></li>
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
                            <button class="btn btn-lg btn-pill blc"><a href="about.html" class="nav-link disabled">За
                                    нас</a>
                            </button>
                        </li>

                    </div>
                </ul>
                <form class="d-flex justify-content-space-between">
                    <div class="collapse navbar-collapse">
                        <button class="btn btn-lg btn-pill btn-marked blc search-button"><a href="buy.php"
                                class="nav-link"><span class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
                        <a class="btn btn-lg btn-pill blc ms-1" href="login.html">
                            <div class="profile-icon d-flex justify-content-center align-items-center">
                                <span class="fa-solid fa-user fa"></span>
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
                                        <a class="nav-link text-start ps-4" href="finance-consulting.php">Финансова консултация</a>
                                    </button>
                                </li>
                                <li class="nav-item w-100">
                                    <button class="btn w-100">
                                        <a class="nav-link text-start ps-4" href="legal-consulting.php">Юридическа консултация</a>
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
                        <button class="btn btn-lg btn-pill blc w-100 text-start removed"><a href="about.html"
                                class="nav-link ps-3 disabled">За
                                нас</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill btn-marked blc w-100 text-start"><a href="buy.php"
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
        <!-- navbar end -->
        <div class="about-title-box">
            <h1 class="primary-color title-font text-center pt-5 pb-5">За нас</h1>
        </div>
        <div class="location-info">
            <!-- <hr> -->
            <div class="row p-5 location-row">
                <div class="col-sm-4 location-text d-flex justify-content-center flex-column">
                    <h2 class=""><i>Местоположение</i></h2>
                    <address>
                        гр. Пловдив 4000 <br>
                        ул. "Г. М. Димитров" 25<br>
                        0878335487<br>
                        forumimotibg@gmail.com<br>
                    </address>
                    <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6471.400569761421!2d24.744939970304266!3d42.13813394937088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1b183692fd9%3A0x905f86099d1c568d!2z0KbQtdC90YLRitGA0J_Qu9C-0LLQtNC40LIg0KbQtdC90YLRitGALCDRg9C7LiDigJ7QlNC-0LrRgtC-0YAg0JMuINCcLiDQlNC40LzQuNGC0YDQvtCy4oCcIDI1LCA0MDAwINCf0LvQvtCy0LTQuNCy!5e0!3m2!1sbg!2sbg!4v1709148870358!5m2!1sbg!2sbg"
                            allowfullscreen="" loading="lazy" class="googlemaps-image border-none"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
                <div class="col-sm-8 d-flex office-images carousel-images flex-row justify-content-around">
                    <!--Carousel for the office picturesation-->
                    <div id="office-images" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#office-images" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#office-images" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#office-images" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/office.png" alt="Outside of the office" class="d-block w-100 c-image">
                            </div>
                            <div class="carousel-item">
                                <img src="img/scenery.jpg" alt="Inside picture of the office"
                                    class="d-block w-100 c-image">
                            </div>
                            <div class="carousel-item">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6471.400569761421!2d24.744939970304266!3d42.13813394937088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1b183692fd9%3A0x905f86099d1c568d!2z0KbQtdC90YLRitGA0J_Qu9C-0LLQtNC40LIg0KbQtdC90YLRitGALCDRg9C7LiDigJ7QlNC-0LrRgtC-0YAg0JMuINCcLiDQlNC40LzQuNGC0YDQvtCy4oCcIDI1LCA0MDAwINCf0LvQvtCy0LTQuNCy!5e0!3m2!1sbg!2sbg!4v1709148870358!5m2!1sbg!2sbg"
                                    allowfullscreen="" loading="lazy" class="googlemaps-image border-none c-image"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#office-images"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#office-images"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="about-no-carousel">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6471.400569761421!2d24.744939970304266!3d42.13813394937088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1b183692fd9%3A0x905f86099d1c568d!2z0KbQtdC90YLRitGA0J_Qu9C-0LLQtNC40LIg0KbQtdC90YLRitGALCDRg9C7LiDigJ7QlNC-0LrRgtC-0YAg0JMuINCcLiDQlNC40LzQuNGC0YDQvtCy4oCcIDI1LCA0MDAwINCf0LvQvtCy0LTQuNCy!5e0!3m2!1sbg!2sbg!4v1709148870358!5m2!1sbg!2sbg"
                            allowfullscreen="" loading="lazy" class="googlemaps-image-no-carousel border-none c-image"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="about-no-carousel-images">
                    <img src="img/office.png" alt="Outside of the office" class="d-block w-100 no-c-image">
                    <img src="img/scenery.jpg" alt="Inside picture of the office" class="d-block w-100 no-c-image">
                </div>
            </div>
            
            <!-- <hr> -->
        </div>
    </div>


    
    <!-- <footer class="beige-background">
            <h2>Footer</h2>
        </footer> -->
    </div>
    <?php include 'footer.php' ?>
    </body>