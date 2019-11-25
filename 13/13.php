<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 13</title>
</head>
<body>
    <h3>Задача 13:</h3>
    <p>В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.</p>
    <h3>Решение:</h3>
    <?php
        $number = 573;
        // Проверка исла на трехзначность
        if (($number < 100) || ($number > 999)) {
            echo "\$number = $number - это число не трехзначное.";
            die;
        } 

    ?>
</body>
</html>