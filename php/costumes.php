<?php
require_once('connection.php');
$result = mysqli_query($conn,'SELECT `name`,`image`,`prokat`,`pokupka`,`zalog` FROM `costumes` ORDER BY ID DESC LIMIT 4');

while($costume = mysqli_fetch_assoc($result)) {
    echo    '<div class="primerione">
                <span class="primerinazvaniya">'.$costume['name'].'</span>
                <img src="/image/costumes/'.$costume['image'].'">
                <span class="primericeni">Прокат : '.$costume['prokat'].' р.<br>Покупка : '.$costume['pokupka'].' р.<br>Залог : '.$costume['zalog'].' р.</span>
            </div>';
}

$conn->close();
?>