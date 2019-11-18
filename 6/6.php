<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 6</title>
</head>
<body>
    <h3>Задача 6:</h3>
    <p>Дано два числа 17 и 54. Найдите сумму 40% от первого числа и 84% от второго числа.</p>
    <h3>Решение:</h3>
    <?php
        $x = 17;
        $y = 54;
        $x40 = $x / 100 * 40;
        $y84 = $y / 100 * 84;
        $sum = $x40 + $y84;
        echo "40% от 17 равно $x40, 84% от 54 равно $y84, сума этих чисел равна $x40 + $y84";
    ?>
    
</body>
</html>