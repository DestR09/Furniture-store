<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/b0e00cbeb4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Мебель</title>

</head>
<a href="#" id="scrollToTopButton" class="scroll-to-top-button">
    <i class="fas fa-arrow-up"></i>
</a>
<body>
<?php require "header.php"; ?>
<?php include_once 'index-products.php'; ?>
    <div class="carousel slide" data-ride="carousel" id="slides">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/3a24a5a581ac0fac7b9f52249ca20c82.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Современная</h1>
                    <h3>и удобная мебель</h3>
                    <a href="katalog.php"><button type="button" class="btn btn-outline-light btn-lg">Посмотреть каталог</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/197_original.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Современная</h1>
                    <h3>и удобная мебель</h3>
                    <a href="katalog.php"><button type="button" class="btn btn-outline-light btn-lg">Посмотреть каталог</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/mebel-dlya-kabineta-loft-07.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Современная</h1>
                    <h3>и удобная мебель</h3>
                    <a href="katalog.php"><button type="button" class="btn btn-outline-light btn-lg">Посмотреть каталог</button></a>
                </div>
            </div>
        </div>
    </div>


    <section class="car" id="cars">
        <div class="container">
            <h2 class="sub-title">Хиты продаж</h2>
            <div class="car-items">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Furniture";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Выполнение запроса к базе данных
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Проверка наличия данных
if ($result->num_rows > 0) {
    $index = 0; // Добавлен индекс для data-id
    // Вывод данных
    while ($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<div class="car-item-image"><img src="' . $row['img'] . '" alt="' . $row['name'] . '"></div>';
        echo '<div class="car-item-title">' . $row['name'] . '</div>';
        echo '<div class="car-item-title1">' . $row['price'] . ' ₽</div>';
        echo '<div class="car-item-info">';
        echo '<div class="car-item-point"><img src="img/free-icon-bar-stool-6305828.png" alt="' . $row['category'] . '"><div>' . $row['category'] . '</div></div>';
        echo '</div>';
        // Добавлен data-id для каждой кнопки
        echo '<div class="car-item-action"><button class="button car-button" data-id="' . $row['id'] . '">Посмотреть товар</button></div>';
        echo '</div>';
        $index++;
    }
} else {
    echo "0 результатов";
}

$conn->close();
?>

                <div id="modal-el" class="modal-el">
                    <div class="modal-content">
                      <span class="close" onclick="closeModal()">&times;</span>
                      <div id="modal-item">
                        <h2>Выбранный товар:</h2>
                        <div id="selected-item">
                            <div class="car-item" id="item7">
                                <div class="car-item-image">
                                    <img src="img/image 16.png" alt="Image 15">
                                </div>
                                <div class="car-item-title">SGR-V-4360</div>
                                <div class="car-item-title1">22 870 ₽</div>
                                <div class="car-item-info">
                                    <div class="car-item-point">
                                        <img src="img/free-icon-shelving-7064201.png" alt="Стеллажи">
                                        <div>Стеллаж</div>
                                    </div>
        
                                </div>
                                <div class="car-item-action">
                                    <button class="button car-button">Просмотр товара</button>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>
<script src="js/script.js"></script>
</html>