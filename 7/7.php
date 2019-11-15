<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 7</title>
</head>
<body>
    <h3>Задача 7:</h3>
    <p>Дано положительное число. Найдите сумму его цифр.</p>
    <h3>Решение:</h3>
    <?php
        
        $number = 12249;                    // Инициализируем 3-х значное число и результаты
        echo "<p>Число: $number</p>";       // выведем его в браузер
        $trans = $number;
        $result = 0;
        do {
            $result += $trans % 10;
            $trans = floor($trans/10);
        } while ($trans != 0);
        echo "Сумма его цифр: $result";
    ?>
    
</body>
</html>