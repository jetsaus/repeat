<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 31</title>
</head>
<body>
 . . 

    <h3>Задача 31:</h3>
    <p><i>Создайте массив:</i></p>
    <pre>
        $arr=['a', 'b', 'c']
    </pre>
    <p>Выведите значение массива на экран с помощью функции var_dump(). С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.
    </p>

    <h3>Решение:</h3>
    <?php
        $arr=['a', 'b', 'c'];
        var_dump($arr);
        echo 'Содержимое 1-го элемента - ' . $arr[0] . '<br>';
        echo 'Содержимое 2-го элемента - ' . $arr[1] . '<br>';
        echo 'Содержимое 3-го элемента - ' . $arr[2] . '<br>';
    ?>
</body>
</html>