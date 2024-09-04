<!--Това е простият код без дизайн с всичко в една форма. Първоначалният код с дизайна е в адд-агент-проба.пхп-->
<?php
    $nameofproperty = $_SESSION['nameofproperty'];
    switch ($nameofproperty)
    {
        case "business_property":
            $title = 'бизнес имот';
            break;
        case "garage":
            $title = 'гараж';
            break;
        case "hotel":
            break;
        case "house":
            $title = 'къща';
            break;
        case "house_floor":
            $title = 'етаж от къща';
            break;
        case "industrial_premise":
            $title = 'индустриално помещение';
            break;
        case "land":
            $title = 'земеделска земя';
            break;
        case "maisonette":
            $title = 'мезонет';
            break;
        case "office":
            $title = 'офис';
            break;
        case "plot":
            $title = 'парцел';
            break;
        case "restaurant":
            $title = 'ресторант';
            break;
        case "room1":
            $title = 'едностаен апартамент';
            break;
        case "room2":
            $title = 'двустаен апартамент';
            break;
        case "room3":
            $title = 'тристаен апартамент';
            break;
        case "room4":
            $title = 'четиристаен апартамент';
            break;
        case "roomn":
            $title = 'многостаен апартамент';
            break;
        case "shop":
            $title = 'магазин';
            break;
        case "storage":
            $title = 'склад';
            break;
        case "studio":
            $title = 'ателие/студио';
            break;
        case "villa":
            $title = 'вила';
            break;
    }
?>
<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        echo '<title>Добави ' . $title . '</title>';
    ?>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            display: block;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .buttons {
            display: flex;
            justify-content: flex-end;
        }
        button {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        button[type="button"] {
            background-color: #f44336;
            color: white;
        }
        .image-preview {
            width: 100%;
            height: 250px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            background-size: cover;
            background-position: center;
        }
        #fileList {
            margin-top: 10px;
            list-style-type: none;
            padding: 0;
        }

        #fileList li {
            margin: 5px 0;
            padding: 5px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
    </style>

    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/add-agent.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Форум</title>
</head>
<body>
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
                                    <a class="nav-link text-start ps-4" href="finance-consulting.php">Финансова
                                        консултация</a>
                                </button>
                            </li>
                            <li class="nav-item w-100">
                                <button class="btn w-100">
                                    <a class="nav-link text-start ps-4" href="legal-consulting.php">Юридическа
                                        консултация</a>
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







    <div class="container">
        <?php
            echo '<h1>Добави ' . $title . '</h1>';
        ?>
        
        <form action="add-agent.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Изберете снимки:</label>
                <div class="image-preview" id="imagePreview"></div>
                <label for="images" class="custom-file-upload">
                    Качи файлове
                </label>
                <input type="file" id="images" name="images[]" multiple>
                <br><br>
                <ul id="fileList"></ul>
                <br>

            </div>
            <div class="form-group">
                <input name="offername" id="offername" for="offername" type="text" class="offer-input"
                            placeholder="Заглавие на обявата" />
            </div>
            <div class="form-group">
                <input name="price" id="price" for="price" type="number" class="offer-input" placeholder="Цена(лв)" />
            </div>
            <div class="form-group">
                <input name="quadrature" id="quadrature" for="quadrature" type="number" class="offer-input"
                            placeholder="Квадратура(кв. метри)" />
            </div>
            
            <div class="buttons">
                <button type="button" onclick="resetForm()">Отмени</button>
                <button type="submit">Добави</button>
            </div>
        </form>
    </div>
    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.style.backgroundImage = `url(${e.target.result})`;
            }

            reader.readAsDataURL(file);
        }

        function resetForm() {
            document.querySelector('form').reset();
            document.getElementById('imagePreview').style.backgroundImage = '';
        }
    </script>

    <script>
        // JavaScript to handle file input and display file names
        document.getElementById('images').addEventListener('change', function(event) {
            const fileList = event.target.files;
            const fileListDisplay = document.getElementById('fileList');
            fileListDisplay.innerHTML = ''; // Clear any previous list

            // Loop through selected files and display their names
            for (let i = 0; i < fileList.length; i++) {
                const li = document.createElement('li');
                li.textContent = fileList[i].name;
                fileListDisplay.appendChild(li);
            }
        });
    </script>
</body>
</html>