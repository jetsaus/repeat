<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 24</title>
</head>
<body>
    <h3>Задача 24:</h3>
    <p>Задача «Сложение времени»****:</p>
       Напишите функцию, которая корректно будет складывать часы и минуты. Примеры: на вход функции подается такое – 1ч20мин+50мин – в результатте функция выведет 2ч10мин.*** (Задача решается разными способами, приведите пример одного из них)
        <h3>Решение:</h3>
        <!-- Форма ввода слагаемых времени -->
        <form method="post">
            <input type="number" size="3" name="lH" min="1" max="999" value="<?php if (isset($lH)) echo $lH;?>"  required>
            <span>час.</span>
            <input type="number" size="3" name="lM" min="1" max="999" value="<?php if (isset($lM)) echo $lM;?>"  required>
            <span>мин.</span>
            <b>+</b>
            <input type="number" size="3" name="rH" min="1" max="999" value="<?php if (isset($rH)) echo $rH;?>"  required>
            <span>час.</span>
            <input type="number" size="3" name="rM" min="1" max="999" value="<?php if (isset($rM)) echo $rM;?>"  required>
            <span>мин.</span>
            <b>=</b>

        </form>                    
        <?php
            // Обработчик сложения времени
            require_once('24f.php');
            echo addTime(2, 23, 1, 50);
        ?>
</body>
</html>