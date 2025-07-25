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
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/adminprofile.css">
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
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="buy.php">Покупка</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="sell.html">Продажба</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="rent.html">Наемане</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="for-rent.html">Отдаване на наем</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="finance-consulting.php">Финансова консултация</a></li>
                                    <li class="nav-item p-1"><a class="dropdown-item nav-link" href="legal-consulting.php">Юридическа консултация</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <button class="btn btn-lg btn-pill blc"><a href="" class="nav-link">Услуги</a></button>
                        </li> -->

                        <li class="nav-item ">
                            <button class="btn btn-lg btn-pill blc"><a href="contacts.php"
                                    class="nav-link">Контакти</a></button>
                        </li>

                        <li class="nav-item ">
                            <button class="btn btn-lg btn-pill blc"><a href="about.php" class="nav-link">За
                                    нас</a></button>
                        </li>

                    </div>
                </ul>

                <form class="d-flex justify-content-space-between">
                    <div class="collapse navbar-collapse">
                        <button class="btn btn-lg btn-pill btn-marked blc search-button">
                            <a href="buy.php" class="nav-link"><span class="fa fa-solid fa-search pe-2"></span>Търсене</a>
                        </button>

                        <a class="btn btn-lg btn-pill blc ms-1" href="login.html">

                            <div class="profile-icon d-flex justify-content-center align-items-center">
                                <span class="fa-solid fa-user fa">

                                </span>
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

                    <li class="nav-item ">
                        <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="contacts.php"
                                class="nav-link ps-3">Контакти</a></button>
                    </li>

                    <li class="nav-item ">
                        <button class="btn btn-lg btn-pill blc w-100 text-start"><a href="about.php"
                                class="nav-link ps-3">За
                                нас</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill btn-marked blc w-100 text-start"><a href="buy.php"
                                class="nav-link ps-3"><span
                                    class="fa fa-solid fa-search pe-2"></span>Търсене</a></button>
                    </li>

                    <li class="nav-item">
                        <button class="btn btn-lg btn-pill blc profile-button w-100 text-start">
                            <a href="login.html" class="nav-link ps-3"><span
                                    class="fa-solid fa-user collapse-user-icon fa"></span>Профил</a>
                        </button>
                    </li>

                </ul>

            </div>
        </div>
        <!-- navbar end -->
        <div class="profile-box p-5">
            <div class="d-grid profile-layout mt-4">
                <div class="grid-item profile-info">
                    <div class="profile-title admin-title">
                        <p class="p-1">Администраторски профил</p>
                        <div class="admin-button-group">
                            <button class="admin-button"><a href="all-offers.html"><i class="material-icons">panorama</i>Всички обяви</a></button>
                            <button class="admin-button"><a href="all-agents.html"><i class="material-icons">people</i>Брокери</a></button>
                        </div>
                    </div>
                    <div class="details-space d-flex flex-column justify-content-around">
                        <div class="profile-subtitle p-4 d-grid">
                            <div class="row">
                                <div class="col-6">
                                    <p class="input-title">Име: <span class="profile-input"><?php echo $_SESSION['name'] ?></span></p>
                                </div>
                                <div class="col-6">
                                    <p class="input-title">Фамилия: <span class="profile-input"><?php echo $_SESSION['lastname'] ?></span></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <p class="input-title">Потребителско име: <span class="profile-input"><?php echo $_SESSION['login_Username'] ?></span></p>
                                </div>
                                <div class="col-6">
                                    <p class="input-title">Имейл: <span class="profile-input"><?php echo $_SESSION['email'] ?></span></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row pt-2">
                                <div class="col-6">
                                    <p class="input-title">Телефон: <span class="profile-input"><?php echo $_SESSION['phone'] ?></span></p>
                                </div>
                                <div class="col-6">
                                    <p class="input-title">Длъжност: <span class="profile-input"><?php echo $_SESSION['experience'] ?></span></p>
                                </div>
                            </div>
                            
                            <!-- <p>Име: </p>
                            <p>Фамилия: </p>
                            <p>Потребителско име: </p>
                            <p>Имейл: </p>
                            <p>Телефон: </p>
                            <p>Длъжност: </p> -->
                        </div>
                        <div class="profile-buttons d-flex pt-4 pb-4">
                            <div class="d-flex flex-row">
                                <div class="notice-button">
                                    <a href="my-offers.php"
                                        ><button class="d-flex justify-content-center align-items-center">Моите обяви<i
                                            class="material-icons">arrow_forward</i></button></a>
                                </div>
                                <div class="edit-button">
                                    <a href="edit-profile-html.php"
                                            ><button class="d-flex justify-content-center align-items-center"><i
                                            class="material-icons">create</i>Редактиране</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item profile-image d-flex justify-content-center align-items-center">
                <?php
                        $realtorid = $_SESSION['login_RealtorID'];
                        $sqlrealtorimg = "SELECT * FROM `realtor_images` WHERE `realtorimg_RealtorID`='$realtorid'";
                        $resultrealtorimg = mysqli_query($con, $sqlrealtorimg);
                        $rowrealtorimg = mysqli_fetch_assoc($resultrealtorimg);
                        $imgurl = $rowrealtorimg['realtorimg_Url'];

                        echo '<img src="'.$imgurl.'" alt="">';
                    ?>
                </div>
                <div class="grid-item profile-bio">
                    <p class="p-4"><?php echo $_SESSION['description'] ?></p>
                </div>
            </div>
        </div>

    </div>
</body>
