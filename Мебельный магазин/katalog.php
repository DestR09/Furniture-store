<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/katalog.css">
    <script src="https://kit.fontawesome.com/b0e00cbeb4.js" crossorigin="anonymous"></script>
    <title>Каталог</title>
</head>

<body>
    <?php require "header.php"; ?>
    <div class="dropdown">
        <button class="button1">Выберите товар</button>
        <div class="dropdown-content">
            <a href="#" onclick="showItem('item1')">Стулья</a>
            <a href="#" onclick="showItem('item2')">Столы</a>
            <a href="#" onclick="showItem('item3')">Шкафы</a>
            <a href="#" onclick="showItem('item4')">Кровати</a>
            <a href="#" onclick="showItem('item5')">Диваны</a>
            <a href="#" onclick="showItem('item6')">Комоды</a>
            <a href="#" onclick="showItem('item7')">Стеллажи</a>
        </div>
    </div>

    <section class="car" id="cars">
        <div class="container">
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

                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="car-item" id="item' . $row['id'] . '">';
                        echo '<div class="car-item-image"><img src="' . $row['img'] . '" alt="' . $row['name'] . '"></div>';
                        echo '<div class="car-item-title">' . $row['name'] . '</div>';
                        echo '<div class="car-item-title1">' . $row['price'] . ' ₽</div>';
                        echo '<div class="car-item-info">';
                        echo '<div class="car-item-point"><img src="img/free-icon-bar-stool-6305828.png" alt="' . $row['category'] . '"><div>' . $row['category'] . '</div></div>';
                        echo '</div>';
                        echo '<div class="car-item-action"><button class="button car-button" data-id="' . $row['id'] . '">Забронировать</button></div>';
                        echo '</div>';
                    }
                } else {
                    echo "0 результатов";
                }

                $conn->close();
                ?>
<script>
        document.querySelectorAll('.car-button').forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.dataset.id;
                window.location.href = `product.php?id=${itemId}`;
            });
        });
    </script>
</body>

</html>
<div class="car-item">
    <div class="car-item-image">
        <img src="img/image 2.png" alt="Image 1">
    </div>

    <div class="car-item-title">Валенсия Beige</div>
    <div class="car-item-title1">2 300 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-bar-stool-6305828.png" alt="Барные стулья">
            <div>Барные стулья</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="1">Забронировать</button>
    </div>
</div>

<div class="car-item">
    <div class="car-item-image">
        <img src="img/image 2 (1).png" alt="Image 1">
    </div>

    <div class="car-item-title">Толикс-2 White Gloss</div>
    <div class="car-item-title1">4 600 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-bar-stool-6305828.png" alt="Барные стулья">
            <div>Барные стулья</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="2">Забронировать</button>
    </div>
</div>

<!-- Добавьте остальные товары здесь -->

<div class="car-item" id="item5">
    <div class="car-item-image">
        <img src="img/image 2 (2).png" alt="Image 2">
    </div>

    <div class="car-item-title">Динс Velvet Yellow</div>
    <div class="car-item-title1">28 490 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-sofa-114613.png" alt="Диваны">
            <div>Диваны</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="3">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item5">
    <div class="car-item-image">
        <img src="img/image 2 (3).png" alt="Image 3">
    </div>

    <div class="car-item-title">Кускен Navy Blue</div>
    <div class="car-item-title1">2 300 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-sofa-114613.png" alt="Диваны">
            <div>Диваны</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="4">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item4">
    <div class="car-item-image">
        <img src="img/image 2 (4).png" alt="Image 4">
    </div>

    <div class="car-item-title">Шерона Barhat Grey</div>
    <div class="car-item-title1">21 990 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-double-bed-8145307.png" alt="Двухспальные кровати">
            <div>Двухспальные кровати</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="5">Забронировать</button>
    </div>
</div>


<div class="car-item" id="item6">
    <div class="car-item-image">
        <img src="img/image 2 (5).png" alt="Image 5">
    </div>

    <div class="car-item-title">Авиньон-1</div>
    <div class="car-item-title1">18 990 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-sideboard-2318560.png" alt="Комоды">
            <div>Комоды</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="6">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item6">
    <div class="car-item-image">
        <img src="img/image 2 (6).png" alt="Image 6">
    </div>

    <div class="car-item-title">Стелла Дуб Сонома</div>
    <div class="car-item-title1">8 990 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-chest-of-drawers-755608.png" alt="Комоды">
            <div>Комоды</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="7">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item2">
    <div class="car-item-image">
        <img src="img/image 2 (7).png" alt="Image 7">
    </div>

    <div class="car-item-title">Бенфлит Grey</div>
    <div class="car-item-title1">7 290 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-coffee-table-9121888.png" alt="Журнальные столы">
            <div>Журнальные столы</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="8">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item2">
    <div class="car-item-image">
        <img src="img/image 2 (8).png" alt="Image 8">
    </div>

    <div class="car-item-title">Тиффани</div>
    <div class="car-item-title1">10 990 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-desk-4974815.png" alt="Письменные столы">
            <div>Письменные столы</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="9">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item3">
    <div class="car-item-image">
        <img src="img/image 2 (9).png" alt="Image 9">
    </div>

    <div class="car-item-title">Валенсия Beige</div>
    <div class="car-item-title1">19 990 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-wardrobe-7270417.png" alt="Шкафы">
            <div>Шкафы</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="10">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item3">
    <div class="car-item-image">
        <img src="img/image 2 (10).png" alt="Image 10">
    </div>

    <div class="car-item-title">Лайт-3-170-240 Белый</div>
    <div class="car-item-title1">27 290 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-wardrobe-7270417.png" alt="Шкафы">
            <div>Шкафы</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="11">Забронировать</button>
    </div>
</div>

<div class="car-item" id="item5">
    <div class="car-item-image">
        <img src="img/image 2 (11).png" alt="Image 11">
    </div>

    <div class="car-item-title">Вилли Pink</div>
    <div class="car-item-title1">21 290 ₽</div>
    <div class="car-item-info">
        <div class="car-item-point">
            <img src="img/free-icon-sofa-114613.png" alt="Детский диван">
            <div>Детский диван</div>
        </div>
    </div>
    <div class="car-item-action">
        <button class="button car-button" data-id="12">Забронировать</button>
    </div>
</div>

        <div class="car-item" id="item5">
            <div class="car-item-image">
                <img src="img/image 2 (12).png" alt="Image 12">
            </div>

            <div class="car-item-title">Сан-Паулу</div>
            <div class="car-item-title1">25 990 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-sofa-114613.png" alt="Диваны">
                    <div>Диваны</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item6">
            <div class="car-item-image">
                <img src="img/image 2 (13).png" alt="Image 13">
            </div>

            <div class="car-item-title">Равенна-1 Light</div>
            <div class="car-item-title1">14 990 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-chest-of-drawers-755608.png" alt="Комоды">
                    <div>Комоды</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item7">
            <div class="car-item-image">
                <img src="img/image 2 (14).png" alt="Image 14">
            </div>

            <div class="car-item-title">Бервин 5 серый</div>
            <div class="car-item-title1">19 990 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-shelving-7064201.png" alt="Стеллажи">
                    <div>Стеллажи</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item7">
            <div class="car-item-image">
                <img src="img/image 2 (15).png" alt="Image 15">
            </div>

            <div class="car-item-title">Эдельвейс 5</div>
            <div class="car-item-title1">11 620 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-shelving-7064201.png" alt="Стеллажи">
                    <div>Стеллажи</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item1">
            <div class="car-item-image">
                <img src="img/image 1 (1).png" alt="Image 15">
            </div>

            <div class="car-item-title">DIUM</div>
            <div class="car-item-title1">15 690 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-dining-2271423.png" alt="Стеллажи">
                    <div>Стулья</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item1">
            <div class="car-item-image">
                <img src="img/image 2 (17)-PhotoRoom.png-PhotoRoom.png" alt="Image 15">
            </div>

            <div class="car-item-title">Джоконда крем глянец</div>
            <div class="car-item-title1">19 280 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-dining-2271423.png" alt="Стеллажи">
                    <div>Стулья</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item1">
            <div class="car-item-image">
                <img src="img/image 3.png" alt="Image 15">
            </div>

            <div class="car-item-title">Alterona</div>
            <div class="car-item-title1">7 999 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-dining-2271423.png" alt="Стеллажи">
                    <div>Стулья</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item2">
            <div class="car-item-image">
                <img src="img/image 4.png" alt="Image 15">
            </div>

            <div class="car-item-title">Токио-2L</div>
            <div class="car-item-title1">18 257 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-dining-table-3731583.png" alt="Кухонные столы">
                    <div>Кухонный стол</div>
                </div>
            </div>

            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item2">
            <div class="car-item-image">
                <img src="img/image 5.png" alt="Image 15">
            </div>

            <div class="car-item-title">Dikline ZB140</div>
            <div class="car-item-title1">19 999 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-table-8029994.png" alt="Стол">
                    <div>Стол</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item3">
            <div class="car-item-image">
                <img src="img/image 6.png" alt="Image 15">
            </div>

            <div class="car-item-title">Гранд 5-600</div>
            <div class="car-item-title1">25 699 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-wardrobe-7270417.png" alt="Шкаф">
                    <div>Шкаф</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item3">
            <div class="car-item-image">
                <img src="img/image 7.png" alt="Image 15">
            </div>

            <div class="car-item-title">Фиеста</div>
            <div class="car-item-title1">15 999 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-wardrobe-7270417.png" alt="Шкаф">
                    <div>Шкаф</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item4">
            <div class="car-item-image">
                <img src="img/image 8.png" alt="Image 15">
            </div>

            <div class="car-item-title">Amsterdam</div>
            <div class="car-item-title1">59 040 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-double-bed-8145307.png" alt="Кровати">
                    <div>Кровать</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item4">
            <div class="car-item-image">
                <img src="img/image 9.png" alt="Image 15">
            </div>

            <div class="car-item-title">Магнум</div>
            <div class="car-item-title1">20 290 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-double-bed-8145307.png" alt="Кровати">
                    <div>Кровать</div>
                </div>
            </div>

            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item5">
            <div class="car-item-image">
                <img src="img/image 10.png" alt="Image 15">
            </div>

            <div class="car-item-title">Сканди 3П</div>
            <div class="car-item-title1">32 990 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-sofa-114613.png" alt="Диваны">
                    <div>Диван</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item5">
            <div class="car-item-image">
                <img src="img/image 12.png" alt="Image 15">
            </div>

            <div class="car-item-title">Шарп Velvet</div>
            <div class="car-item-title1">46 990 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-sofa-114613.png" alt="Диваны">
                    <div>Диван</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item6">
            <div class="car-item-image">
                <img src="img/image 13.png" alt="Image 15">
            </div>

            <div class="car-item-title">Аврова</div>
            <div class="car-item-title1">9 999 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-chest-of-drawers-755608.png" alt="Комоды">
                    <div>Комод</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

        <div class="car-item" id="item6">
            <div class="car-item-image">
                <img src="img/image 15.png" alt="Image 15">
            </div>

            <div class="car-item-title">Бруклин СБ 432</div>
            <div class="car-item-title1">22 399 ₽</div>
            <div class="car-item-info">
                <div class="car-item-point">
                    <img src="img/free-icon-chest-of-drawers-755608.png" alt="Комоды">
                    <div>Комод</div>
                </div>

            </div>
            <div class="car-item-action">
                <button class="button car-button">Забронировать</button>
            </div>
        </div>

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
                <button class="button car-button">Забронировать</button>
            </div>
        </div>
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
                                <button class="button car-button">Забронировать</button>
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