<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 33</title>
</head>
<body>
 . . 

    <h3>Задача 33:</h3>
    <p><i>Создайте массив $arr с элементами 2, 8, 5, 3:</i></p>
    <pre>
        $arr=[2, 8, 5, 3]
    </pre>
    <p>Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $a. Выведите на экран значение этой переменной.</p>

    <h3>Решение:</h3>
    <?php
        $arr=[2, 8, 5, 3];
        var_dump($arr);
        $a = (($arr[0] * $arr[1]) + ($arr[2] * $arr[3]));
        echo '$a = ((' . $arr[0] . '*' . $arr[1] . ') + (' .$arr[2] . '*' . $arr[3] . ')) = ' . $a;
        
    ?>
</body>
</html>