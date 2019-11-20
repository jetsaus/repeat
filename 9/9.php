<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 9</title>
</head>
<body>
    <h3>Задача 9:</h3>
    <p>Дано натуральное число $number. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.</p>
    <h3>Решение:</h3>
    <?php
        $number = 9;
        echo "<p>Число \$number = $number.</p>";
        if (($number % 2) == 0) {
            $result = $number / 2;
            echo "<p>Оно чётное, уменьшим его в 2 раза: \$number = $result</p>";
        } else {
            $result = $number * 3;
            echo "<p>Оно нечётное, увеличим в 3 заза: \$number = $result</p>";
        }
    ?>
    
</body>
</html>