<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: admin-auto.php');
    exit;
}

include '../core.php';

if (isset($_POST['updateProduct'])) {
    $productId = $_POST['productId'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $subscriptions = $_POST['subscriptions'];
    $garant = $_POST['garant'];
    $category = $_POST['category'];

    // Подготовленный запрос для обновления данных товара
    $sql = "UPDATE products SET name=?, price=?, subscriptions=?, garant=?, category=? WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssssi", $name, $price, $subscriptions, $garant, $category, $productId);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Товар успешно обновлен в базе данных.";
        header("Location: admin-dashboard.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Ошибка при обновлении товара: " . $stmt->error;
        header("Location: admin-dashboard.php");
        exit();
    }
} else {
    header("Location: admin-dashboard.php");
    exit();
}
?>
