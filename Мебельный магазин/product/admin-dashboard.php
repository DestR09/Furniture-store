<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Редактор</title>
    <style>
        .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    margin-bottom: 20px; /* Уменьшаем пробел между хедером и кнопкой Выйти */
}

.header form {
    margin: 10px 0 0 0; /* Убираем верхний отступ и устанавливаем отступы слева, справа и снизу */
}

.header form a.logout:hover {
    background-color: #1f1f1f; /* Изменяем цвет при наведении */
}
.header form a.logout {
    background: #030305;
    border: 0;
    box-sizing: border-box;
    text-align: center;
    font-weight: bold;
    font-size: 16px;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    color: #FFFFFF;
    transition: background-color .5s;
    padding: 10px 20px; /* Добавляем отступы */
    border-radius: 5px; /* Добавляем скругление углов */
}

.main-admin-block {
    margin-bottom: 20px;
}

.main-admin-block__p {
    font-size: 18px;
}

.main-admin-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.main-admin-block-inputs-block {
    padding: 10px;
    border-radius: 5px;
}

.main-admin-block-inputs-block p {
    margin: 0;
    font-weight: bold;
}

.main-admin-block-inputs input[type="text"],
.main-admin-block-inputs input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.main-admin-block-right-addTovar input[type="submit"],
.main-admin-block-delete__button button,
.main-admin-block-right-updateTovar button {
    padding: 20px;
    width: 234px;
    height: 54px;
    background: #030305;
    border: 0;
    box-sizing: border-box;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    color: #FFFFFF;
    transition: background-color .5s;
}

.main-admin-block-right-addTovar input[type="submit"]:hover,
.main-admin-block-delete__button button:hover,
.main-admin-block-right-updateTovar button:hover {
    background-color: #1f1f1f; /* Изменяем цвет при наведении */
}

    </style>
</head>

<body>
    <?php include "header.php" ?>

    <?php
    if (isset($_SESSION['error_message'])) {
        echo '<div class="error">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']);
    }

    if (isset($_SESSION['success_message'])) {
        echo '<div class="success">' . $_SESSION['success_message'] . '</div>';
        unset($_SESSION['success_message']);
    }
    ?>

        <div class="container">
            <div class="main-admin-block-a">
                <div class="main-admin-block__p">
                    <form>
                        <?php if (isset($_SESSION['user']['avatar'])) : ?>
                            <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                        <?php endif; ?>

                        <?php if (isset($_SESSION['user']['full_name'])) : ?>
                            <h1><?= $_SESSION['user']['full_name'] ?></h1>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['user']['email'])) : ?>
                            <a href="#"><?= $_SESSION['user']['email'] ?></a>
                        <?php endif; ?>

                        <div class="input-form">
                            <a href="logout.php" class="logout">Выйти</a>
                        </div>
                    </form>
                </div>
            </div>

            <form action="add_product_process.php" method="post" enctype="multipart/form-data" novalidate class="main-admin-form">
                <div class="main-admin-block-inputs" id="add_Tovar">
                    <div class="main-admin-block-inputs-block">
                        <div class="main-admin-block__p_h">
                            <p>Добавление товара</p>
                        </div>
                    </div>
                    <div class="main-admin-block-right">
                    <form action="add_product.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Название товара" required><br>
    <input type="text" name="price" placeholder="Цена" required><br>
    <input type="text" name="subscriptions" placeholder="Описание" required><br>
    <input type="text" name="garant" placeholder="Гарантия" required><br>
    <input type="text" name="category" placeholder="Категория" required><br>
    <input type="file" name="img" required><br>
</form>

                        <div class="main-admin-block-right-addTovar">
                            <input class="knopka" type="submit" name="add_product" value="Добавить товар">
                        </div>
                    </div>
                </div>
            </form>

            <form action="delete_product_process.php" method="post" class="main-admin-form">
                <div class="main-admin-block-delete" id="delete_Tovar">
                    <div class="main-admin-block-delete__p">
                        <p> Удалить товар</p>
                    </div>
                    <div class="main-admin-block-delete__input">
                        <input type="text" placeholder="id товара" name="deleteTovar">
                    </div>
                </div>

                <div class="main-admin-block-delete__button">
                    <button class="knopka1" type="submit" name="deleteProduct">Удалить товар</button>
                </div>
            </form>

            <form action="edit_product.php" method="post" class="main-admin-form">
                <div class="main-admin-block-update" id="update_Tovar">
                    <div class="main-admin-update-p">
                        <div class="main-admin-update__p">
                            <p>Обновить товар</p>
                        </div>
                    </div>
                    <div class="main-admin-update-inputs">
                        <div class="main-admin-update-inputs-id">
                            <input type="text" id="idUpdate" name="idUpdate" placeholder="id товара">
                        </div>
                        <div class="main-admin-block-right-updateTovar">
                            <button type="submit" name="findProduct">Обновить товар</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
