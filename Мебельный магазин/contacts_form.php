<?php
include 'core.php';

$response = array('message' => '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageText = $_POST['message'];

    $sql = "INSERT INTO sub (name, email, message) VALUES ('$name', '$email', '$messageText')";
    if ($connect->query($sql) === TRUE) {
        $response['message'] = "Мы ответим вам в ближайшее время :)";
    } else {
        $response['message'] = "Ошибка, попробуйте позже :(: " . $connect->error;
    }

    // Возвращаем JSON-ответ
    echo json_encode($response);
}
?>
