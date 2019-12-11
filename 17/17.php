<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 17</title>
</head>
<body>
    <h3>Задача 17:</h3>
    <p>Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет, мир!'.
    </p>
    <h3>Решение:</h3>
    <?php
        // Создание массива
        $array = ['Привет, ', 'мир', '!'];
        // Первый способ
        foreach ($array as $hello) {
            echo $hello;
        }
        echo '<br>';
        // Второй способ
        echo $array[0] . $array[1] . $array[2];
    ?>
</body>
</html>
