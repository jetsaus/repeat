<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 42</title>
</head>
<body>
    <h3>Задача 42:</h3>
    <p><i>В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).</i></p>

    <h3>Решение:</h3>
    <?php
        include_once('42f.php');
        // Пройдемся по месяцам года
        for ($i=0; $i<=13; $i++) {
            echo '$month=' . $i . ', Сезон года - ';
            echo season($i);
            echo '<br>';
        }
    ?>
</body>
</html>