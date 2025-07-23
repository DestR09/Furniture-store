<?php
session_start();

// Проверяем, есть ли товары в корзине
if (!empty($_SESSION['cart'])) {
    // Создаем массив для хранения информации о товарах
    $cart_items = array();

    // Подключаемся к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Furniture";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Получаем информацию о товарах из базы данных
    foreach ($_SESSION['cart'] as $product_id) {
        $sql = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Добавляем информацию о товаре в массив
            $cart_items[] = $row;
        }
    }

    // Закрываем соединение с базой данных
    $conn->close();
} else {
    // Если корзина пуста, выводим сообщение
    $cart_items = array();
    echo "Ваша корзина пуста.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Добавьте любые другие стили, которые вам нужны -->
    <style>
        /* Общие стили */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .cart-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .cart-item {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            width: 200px;
        }

        .cart-item img {
            max-width: 100%;
            height: auto;
        }

        .cart-item h3 {
            margin-top: 10px;
        }

        .cart-item p {
            margin-top: 5px;
            font-weight: bold;
        }

        /* Стили для кнопки удаления */
        .delete-button {
            background-color: #ff6347;
            /* Красный цвет */
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #ff4136;
        }

        .payment-options {
            margin-top: 20px;
            text-align: center;
        }

        .payment-option {
            display: inline-block;
            margin: 0 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php require "header.php"; ?>

    <div class="container">
        <h2>Корзина</h2>
        <div class="cart-items">
            <?php foreach ($cart_items as $item) : ?>
                <div class="cart-item" id="cart-item-<?php echo $item['id']; ?>">
                    <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['name']; ?>">
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['price']; ?> ₽</p>
                    <!-- Добавьте любую другую информацию о товаре, которую вы хотите отобразить -->
                    <button type="button" onclick="removeFromCart(<?php echo $item['id']; ?>)" class="delete-button">Удалить</button>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="payment-options">
        <div class="payment-option">
            <a href=""><img src="img/cc-visa.svg" alt="Банковская карта"></a>
            <span>Оплата картой</span>
        </div>
        <?php include "footer.php" ?>
</body>

<script>
    // Функция для удаления товара из корзины
    function removeFromCart(productId) {
        // Удаляем товар из DOM
        var cartItem = document.getElementById('cart-item-' + productId);
        if (cartItem) {
            cartItem.remove();
        }

        // Удаляем товар из сессии
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'remove_from_cart.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log('Товар успешно удален из корзины.');
            }
        };
        xhr.send('product_id=' + productId);
    }
</script>

</html>