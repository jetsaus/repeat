<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 2</title>
</head>
<body>
    <h3>Задача 2:</h3>
    <p>Даны два числа 4 и 6. Найдите сумму их квадратов.</p>
    <h3>Решение:</h3>
    <?php
        $a = 4;
        $b = 6;
        $aa = $a ** 2;
        $bb = $b ** 2;
        $c = $aa + $bb;
        echo "($a * $a) + ($b * $b) = $aa + $bb = $c";
    ?>
</body>
</html>