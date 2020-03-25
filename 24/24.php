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
        <?php
            require_once('24f.php');
            echo addTime(2, 23, 1, 50);
        ?>
</body>
</html>