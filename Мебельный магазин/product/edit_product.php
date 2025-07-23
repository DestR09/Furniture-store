<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: admin-auto.php');
    exit;
}

include '../core.php';

if (isset($_POST['findProduct'])) {
    $productId = $_POST['idUpdate'];

    // Проверка, чтобы избежать SQL-инъекций
    if (!is_numeric($productId)) {
        $_SESSION['error_message'] = "Неверный формат ID товара.";
        header("Location: admin-dashboard.php");
        exit();
    }

    // Подготовленный запрос для выбора данных товара
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $productData = $result->fetch_assoc();
        // Отображение формы для обновления данных
        include 'update_product_form.php';
        exit();
    } else {
        $_SESSION['error_message'] = "Товар с указанным ID не найден.";
        header("Location: admin-dashboard.php");
        exit();
    }
} else {
    header("Location: admin-dashboard.php");
    exit();
}
?>
