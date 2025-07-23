<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'Furniture');
    if (!$connect) {
        die('Ошибка');
}
?>