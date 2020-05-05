<?php
require_once('connection.php');
$name = $_POST['name'];
$tel = $_POST['tel'];

if(!$result = mysqli_query($conn,"INSERT INTO `form_two`(`name`, `tel`) VALUES ('$name','$tel')"))
    echo '<meta http-equiv="refresh" content="0; url=/pages/error.php">'; // если ошибка
else
    echo '<meta http-equiv="refresh" content="0; url=/pages/noterrortwo.php">'; // если нет ошибки
$conn->close();
?>