<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 4</title>
</head>
<body>
    <h3>Задача 4:</h3>
    <p>Даны три числа x = 2, y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2)</p>
    <h3>Решение:</h3>
    <?php
        $x = 2;
        $y = 6;
        $z = 9;
        $c = ($x + 1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);
        echo "(($x + 1) * 4) - 2 * ($z - 2 * ($x ** 2 + $y ** 2)) = $c";
    ?>
</body>
</html>