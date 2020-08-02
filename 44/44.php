<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 44</title>
</head>
<body>
    <h3>Задача 44:</h3>
    <p><i>Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так – выведите 'да', в противном случае выведите 'нет'.</i></p>

    <h3>Решение:</h3>
    <?php
        $string = 'abcde';
        echo '<p><b><i>Строка символов:</i></b>';
        echo '<p><i>' . "$string" . '</i>';
        if ($string[0] === 'a') {
            echo '<p><i>Первый символ строки "a"</i>';
        } else {
            echo '<p><i>Первый символ строки не "a"</i>';
        }
    ?>
</body>
</html>