<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добави брокер</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Добави брокер</h1>
        <form action="add-agent-proba-php.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Изберете снимка:</label>
                <div class="image-preview" id="imagePreview"></div>
                <label for="image" class="custom-file-upload">
                    Качи файл
                </label>
                <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            </div>
            <div class="form-group">
                <label for="first_name">Име:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Фамилия:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Имейл:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Потребителско име:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Парола:</label>
                <input type="text" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="position">Длъжност:</label>
                <input type="text" id="position" name="position" required>
            </div>
            <div class="form-group">
                <label for="additional_info">Въведете допълнителна информация за себе си:</label>
                <textarea id="additional_info" name="additional_info" rows="4"></textarea>
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
</body>
</html>
