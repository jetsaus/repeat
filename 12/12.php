<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 12</title>
</head>
<body>
    <h3>Задача 12:</h3>
    <p>Дано два числа $a и $b. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет'.</p>
    <h3>Решение:</h3>
    <?php
        $a = -50;
        $b = 50;
        echo "<p>\$a = $a, \$b = $b</p>";
        if (abs($a - $b) == 100) {      // Если числа отличаются на 100
            echo 'Да';
        } else {
            echo 'Нет';
        }
    ?>
    
</body>
</html>