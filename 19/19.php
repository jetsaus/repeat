<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 19</title>
</head>
<body>
    <h3>Задача 19:</h3>
    <p>Дан массив ['Привет, ', 'мир', '!']. Необходимо записать в первый элемент (то есть элемент с номером ноль) этого массива слово 'Пока, '
    (то есть вместо слова 'Привет, ' будет 'Пока, ' ).</p>
    <h3>Решение:</h3>
    <?php
        // Создание массива
        $array = ['Привет, ', 'мир', '!'];
        $array[0] = 'Пока, ';
        foreach ($array as $hello) {
            echo $hello;
        }
    ?>
</body>
</html>