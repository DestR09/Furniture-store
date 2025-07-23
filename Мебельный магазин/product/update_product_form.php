<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Редактор</title>
</head>

<body>
    <?php include "header.php" ?>

    <main class="main">
        <div class="container">
            <form action="update_product_process.php" method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="productId" value="<?php echo $productData['id']; ?>">

                <div class="main-admin-block-inputs" id="update_Tovar">
                    <div class="main-admin-block-inputs-block">
                        <div class="main-admin-block__p_h">
                            <p>Редактирование товара</p>
                        </div>
                    </div>

                    <div class="main-admin-block-right">
                        <div class="main-admin-block__input-name">
                            <input type="text" name="name" required placeholder="Название товара" value="<?php echo $productData['name']; ?>">
                        </div>
                        <div class="main-admin-block-right__textarea">
                            <input type="text" name="garant" required placeholder="Гарантия от продавца" value="<?php echo $productData['garant']; ?>">
                        </div>
                        <div class="main-admin-block-right-cost">
                            <input type="text" name="price" required placeholder="Цена" id="cost" value="<?php echo $productData['price']; ?>">
                        </div>
                        <div class="main-admin-block-right-category">
                            <input type="text" name="category" required placeholder="Категория товара" value="<?php echo $productData['category']; ?>">
                        </div>
                        <br>
                        <div class="main-admin-block-right__textarea">
                            <textarea name="subscriptions" required placeholder="Описание"><?php echo $productData['subscriptions']; ?></textarea>
                        </div>
                        <div class="main-admin-block-right-img__p">
                            <p>Изображения</p>
                        </div>
                        <div class="main-admin-block-right-img__input">
                            <!-- Поле для нового изображения, если необходимо -->
                            <input type="file" name="img" id="img__file">
                        </div>
                        <div class="main-admin-block-right-updateTovar">
                            <input class="knopka" type="submit" name="updateProduct" value="Обновить товар">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
