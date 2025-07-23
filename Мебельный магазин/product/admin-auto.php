<?php
session_start();

function checkCredentials($login, $password) {
    // Здесь вы должны реализовать свою логику проверки учетных данных.
    // Например, проверка в базе данных или в файле.
    // В данном примере, просто для иллюстрации, используем простые условия.

    $validLogin = 'admin'; // Замените на реальный логин
    $validPassword = 'admin11'; // Замените на реальный пароль

    return ($login === $validLogin && $password === $validPassword);
}

// Если админ уже авторизован, перенаправляем его на админ-панель
if (isset($_SESSION['user'])) {
    header('Location: admin-dashboard.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (checkCredentials($login, $password)) {
        $_SESSION['user'] = $login;
        header('Location: admin-dashboard.php');
        exit();
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: admin-auto.php');
        exit();
    }
}

// Если админ не авторизован, отображаем форму авторизации
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация админа</title>
</head>
<body>
    <main>
        <?php require "header.php"; ?>

        <div class="login-container">
            <h2>Авторизация админа</h2>
            <form method="post" action="admin-auto.php">
                <div class="form-group">
                    <label for="login">Логин:</label>
                    <input type="text" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">Войти</button>
                    <?php
                        if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                    <button type="button"><a href="../index.php">Назад</a></button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
