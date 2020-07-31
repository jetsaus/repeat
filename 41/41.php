<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 41</title>
</head>
<body>
    <h3>Задача 41:</h3>
    <p><i>В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число (в первую, вторую или третью).</i></p>

    <h3>Решение:</h3>
    <?php
        require_once('41f.php');
        for ($i=0; $i<=33; $i++) {
            echo '$day = ' . $i . ' - это ';
            echo decade($i) . '<br>';
        }
    ?>
</body>
</html>