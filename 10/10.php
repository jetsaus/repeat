<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 10</title>
</head>
<body>
    <h3>Задача 10:</h3>
    <p>Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка".</p>
    <h3>Решение:</h3>
    <?php
        $number = 11;    // Исходное число
        echo "<p>Число \$number = $number</p>";
        if ($number > 50) {            // $number не меньше 50
            $number = pow($number, 2);  // возведем в квадрат (во вторую степень)
            echo "<p>Число не меньше 50, возведем его в квадрат: \$number = $number</p>";
        } elseif (($number > 10) && ($number < 30)) {
            $number = 0;
            echo "<p>Число больше 10 и меньше 30: \$number = $number</p>";
        } else {                        // В остальных случайх "Ошибка"
            echo '<p>Ошибка</p>';
        }
    ?>
    
</body>
</html>