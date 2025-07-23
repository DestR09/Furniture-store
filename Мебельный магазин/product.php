<?php
session_start();

// Проверяем, был ли нажат кнопка "Добавить в корзину"
if (isset($_POST['add_to_cart'])) {
    // Получаем ID товара, который добавляем в корзину
    $product_id = $_POST['product_id'];

    // Добавляем товар в корзину
    $_SESSION['cart'][$product_id] = $product_id;

    // Перенаправляем пользователя на страницу корзины
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b0e00cbeb4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require "header.php"; ?>
    <?php
    // Получаем ID товара из URL
    $product_id = isset($_GET['id']) ? $_GET['id'] : 1;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Furniture";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    // Проверка наличия данных
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Маленький слайдер -->
                    <div class="small-slider">
                        <!-- Изображения товара -->
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <div><img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>"></div>
                    </div>
                </div>

                <!-- Скрипт для инициализации Slick Carousel -->
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.small-slider').slick({
                            slidesToShow: 2, // Количество отображаемых слайдов
                            slidesToScroll: 1,
                            dots: true,
                            centerMode: true,
                            focusOnSelect: true
                        });
                    });
                </script>

                <div class="col-md-6">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>Категория: <?php echo $row['category']; ?></p>
                    <p>Цена: <?php echo $row['price']; ?> ₽</p>
                    <h3>Гарантия</h3>
                    <p><?php echo $row['garant']; ?></p>
                    <h3>Описание</h3>
                    <p><?php echo $row['subscriptions']; ?></p>
                    <!-- Форма для добавления товара в корзину -->
                    <form action="product.php?id=<?php echo $product_id; ?>" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <button type="submit" name="add_to_cart" class="button car-button">Добавить в корзину</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "Товар не найден.";
    }

    $conn->close();
    ?>

    <?php include "footer.php" ?>
</body>
</html>
