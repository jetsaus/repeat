<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 11</title>
</head>
<body>
    <h3>Задача 11:</h3>
    <p>Дано два числа $a, $b. Вывести наибольшее из них.</p>
    <h3>Решение:</h3>
    <?php
        $a = 15;    // Исходное число 1
        $b = 12;    // Исходное число 2
        echo "<p>Числа: \$a = $a, \$b = $b</p>";
        if ($a > $b) {
            echo "\$a = $a";
        } elseif ($a < $b) {
            echo "\$b = $b";
        } else {
            echo "Числа равны.";
        }
    ?>
    
</body>
</html>