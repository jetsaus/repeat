<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 46</title>
</head>
<body>
    <h3>Задача 46:</h3>
    <p><i>Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как числа первый символ строки, второй и третий.</i></p>

    <h3>Решение:</h3>
    <?php
        include_once '46f.php';
        $strNumber = '1231';                                // Заданное строкой число
        settype($strNumber, 'int');                         // преобразовано в тип integer
        $sumDigits = sumDigits($strNumber);                 // и просуммированы его цифры
        echo '<b><i>Задано число: </i></b>' . $strNumber . ', ';
        echo '<b><i>Сумма его цифр равна: </i></b>' . $sumDigits;
    ?>
</body>
</html>