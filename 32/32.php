<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 32</title>
</head>
<body>
 . . 

    <h3>Задача 32:</h3>
    <p><i>Создайте массив:</i></p>
    <pre>
        $arr=['a', 'b', 'c', 'd']
    </pre>
    <p>C его помощью выведите на экран строку 'a+b, c+d'.</p>

    <h3>Решение:</h3>
    <?php
        $arr=['a', 'b', 'c', 'd'];
        var_dump($arr);
        echo $arr[0] . '+' . $arr[1] . ', ' . $arr[2] . '+' . $arr[3] . '<br>';
    ?>
</body>
</html>