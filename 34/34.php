<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 34</title>
</head>
<body>
 . . 

    <h3>Задача 34:</h3>
    <p><i>Заполните массив $arr числами от 1 до 5, не объявляйте массив, а просто заполните его.</i></p>

    <h3>Решение:</h3>
    <pre>
        for($i=1; $i<=5; $i++) {
            $arr[] = $i;
        }
    </pre>
    <p><i>Готовый массив:</i></p>
    <?php
        for($i=1; $i<=5; $i++) {
            $arr[] = $i;
        }
        var_dump($arr);
    ?>
</body>
</html>