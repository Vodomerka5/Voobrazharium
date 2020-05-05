<?php
$conn = new mysqli("localhost", "имя пользователя", "пароль", "voobrzhrm");

if (mysqli_connect_errno()) {
    echo "<script>console.log('Ошибка подключения к БД')</script>";
    exit();
} else
echo "<script>console.log('Подключение к БД успешно произведено!')</script>";

$conn->set_charset("utf8");
?>