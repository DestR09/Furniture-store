<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"> <img src="img/lJyq5BO9YGQ-transformed.png" alt="logo" href="#"></a>
        </div>
        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="index.php">Главная</a>
                </li>
                <li class="menu-item">
                    <a href="katalog.php">Каталог</a>
                </li>
                <li class="menu-item">
                    <a href="contacts.php">Контакты</a>
                </li>
                <li class="menu-item">
                    <a href="aboutus.php">О нас</a>
                </li>
                <li class="menu-item">
                    <a href="cart.php">Корзина</a>
                </li>
                <?php
                session_start();
                if(isset($_SESSION['user']) && isset($_SESSION['user']['is_admin']) && $_SESSION['user']['is_admin'] == true) {
                    echo '<li class="menu-item">
                            <a href="admin-auto.php">Админ панель</a>
                          </li>';
                } else {
                    echo '<li class="menu-item">
                            <a href="product/admin-auto.php">Вход</a>
                          </li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
