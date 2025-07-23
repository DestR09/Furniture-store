<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Furniture";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$products = [
    ["Валенсия Beige", 2300, "Барные стулья", "img/image 2.png"],
    ["Толикс-2 White Gloss", 4600, "Барные стулья", "img/image 2 (1).png"],
    ["Динс Velvet Yellow", 28490, "Диваны", "img/image 2 (2).png"],
    ["Кускен Navy Blue", 2300, "Диваны", "img/image 2 (3).png"],
    ["Шерона Barhat Grey", 21990, "Двухспальные кровати", "img/image 2 (4).png"],
    ["Авиньон-1", 18990, "Буфеты", "img/image 2 (5).png"],
    ["Стелла Дуб Сонома", 8990, "Комоды", "img/image 2 (6).png"],
    ["Бенфлит Grey", 7290, "Журнальные столы", "img/image 2 (7).png"],
    ["Тиффани Вудлайн Крем", 10990, "Письменные столы", "img/image 2 (8).png"],
    ["Валенсия Beige", 19990, "Шкафы", "img/image 2 (9).png"],
    ["Лайт-3-170-240 Белый", 27290, "Шкафы", "img/image 2 (10).png"],
    ["Вилли Pink", 21290, "Детский диван", "img/image 2 (11).png"],
    ["Сан-Паулу Velvet Brown", 25990, "Диваны", "img/image 2 (12).png"],
    ["Равенна-1 Light", 14990, "Комоды", "img/image 2 (13).png"],
    ["Бервин 5 серый", 19990, "Стеллажи", "img/image 2 (14).png"],
    ["Эдельвейс 5", 11620, "Стеллажи", "img/image 2 (15).png"],
];


foreach ($products as $product) {
    $product_name = $product[0];
    $product_price = $product[1];
    $product_category = $product[2];
    $product_img = $product[3];

    $check_sql = "SELECT * FROM products WHERE name = '$product_name' AND price = $product_price AND category = '$product_category' AND img = '$product_img'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows == 0) {
        // Если товар не существует, добавляем его в базу данных
        $sql = "INSERT INTO products (name, price, category, img) VALUES ('$product_name', $product_price, '$product_category', '$product_img')";
        if ($conn->query($sql) !== TRUE) {
            echo "Ошибка: " . $conn->error;
        }
    }
}
$conn->close();
?>
