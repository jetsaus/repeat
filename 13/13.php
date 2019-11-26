<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 13</title>
</head>
<body>
    <h3>Задача 13:</h3>
    <p>В данном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.</p>
    <h3>Решение:</h3>
    <?php

        $number = -356480341;   // Число
        $positive = true;       // Знак числа +/-
        $strNumber = '';        // Строковый эквивалент числа
        $arrStrNum = [];        // Массив строковых эквивалентов цифр числа
        $arrNumber = [];        // Массив чисел
        $maxNumber = 0;         // Максимальная цифра
        $minNumber = 0;         // Минимальная цифра

        echo "\$number = $number<br><br>";

        // Приведем число к целому
        $number = (int)$number;

        // Проверка числа на 0
        if ($number == 0) {
            echo "\$number = $number - перестановку делать нет смысла.";
            die;
        }
        // Проверка положительное оно, или отрицательное
        if ($number > 0) {      // Положительное
            $positive = true;
        } else {                // Отрицательное
            $positive = false;
            $number = (-1) * $number;
        }
        // Преобразуем число в строку
        $strNumber = strval($number);
        // Преобразуем строку в строковый эквивалент массива чисел
        $arrStrNum = str_split($strNumber);
        // Преобразуем строковый массив в массив чисел
        foreach ($arrStrNum as $valStrNum) {
            $arrNumber[] = (int)$valStrNum;
        }
        // Отсортируем массив в зависимости от знака +/- числа
        if ($positive) {        // Число положительное
            rsort($arrNumber);
        } else {                // Число отрицательное
            sort($arrNumber);
        }
        // Выбираем цифры в строковый массив
        $strNumber = '';
        foreach ($arrNumber as $valNumber) {
            $strNumber .= strval($valNumber);
        }
        // Преобразуем строк в число
        $number = (int)$strNumber;
        if (!$positive) {               // Число было отрицательным
            $number = (-1) * $number;   // инвертируем его
        }
        echo "Преобразовано в $number";
    ?>
</body>
</html>