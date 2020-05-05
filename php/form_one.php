<?php
require_once('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
if(!$result = mysqli_query($conn,"INSERT INTO `form_one`(`name`, `email`) VALUES ('$name','$email')"))
    echo '<meta http-equiv="refresh" content="0; url=/pages/error.php">'; // если ошибка
else
    echo '<meta http-equiv="refresh" content="0; url=/pages/noterrorone.php">'; // если нет ошибки
$conn->close();
?>