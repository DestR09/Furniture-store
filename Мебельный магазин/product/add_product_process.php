<?php

include '../core.php';

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $subscriptions = $_POST['subscriptions'];
    $garant = $_POST['garant'];
    $category = $_POST['category'];

    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];

        $img_path = '../img/' . $img_name;
        if (move_uploaded_file($img_tmp, $img_path)) {

            $sql = "INSERT INTO `products` (`name`, `price`, `subscriptions`, `garant`, `category`, `img`) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $connect->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssssss", $name, $price, $subscriptions, $garant, $category, $img_path);

                if ($stmt->execute()) {
                    $_SESSION['success_message'] = "Товар успешно добавлен в базу данных.";
                    header("Location: admin-dashboard.php");
                    exit();
                } else {
                    $_SESSION['error_message'] = "Ошибка при выполнении запроса: " . $stmt->error;
                }
            } else {
                $_SESSION['error_message'] = "Ошибка при подготовке запроса: " . $connect->error;
            }
        } else {
            $_SESSION['error_message'] = "Ошибка при загрузке изображения.";
        }
    } else {
        $_SESSION['error_message'] = "Ошибка: Не удалось загрузить изображение.";
    }
}

header("Location: admin-dashboard.php");
exit();
