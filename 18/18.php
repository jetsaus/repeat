<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 18</title>
</head>
<body>
    <h3>Задача 18:</h3>
    <p>Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо записать в переменную $text фразу 'Привет, мир!', а затем вывести на экран содержимое этой переменной.
    </p>
    <h3>Решение:</h3>
    <?php
        // Создание массива и переменной
        $array = ['Привет, ', 'мир', '!'];
        $text = '';
        // Первый способ
        foreach ($array as $hello) {
            $text .= $hello;
        }
        echo $text;
        echo '<br>';
        // Второй способ
        $text = '';
        $text = $array[0] . $array[1] . $array[2];
        echo $text;
    ?>
</body>
</html>