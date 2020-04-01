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
        echo "<p>Число: $number</p>";       // Выведем его в браузер
        $trans = $number;                   // Объявим промежуточный накопитель
        $result = 0;                        // Объявим результирующее число
        do {
            $result += $trans % 10;         // Остаток от деления на 10 добавим в результирующее число
            $trans = floor($trans/10);      // В результирующий накопитель занесем оставшееся числа, за минусом уже добавленного
        } while ($trans != 0);              // Пока промежуточное число <> 0
        echo "Сумма его цифр: $result";     // Выведем результат
        // Другой метод, приведения к текстовой строке
        $result = 578;
        echo '<P>Метод приведения к текстовой строке</>';
        $result .= '';                      // Приводим число к текстовой строке
        echo "<p>Число: $result</p>";
        $sum = $result[0] + $result[1] + $result[2];
        echo "Сумма цифр: $result[0] + $result[1] + $result[2] = $sum";

    ?>
    
</body>
</html>