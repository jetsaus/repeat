<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 30</title>
</head>
<body>
    <h3>Задача 30:</h3>
    <p>Дан многомерный массив:</p>
    <pre>
        $arr = [
            'sp'=>['azul', 'rojo', 'verde'],
            'en'=>['blue', 'red', 'green'],
        ];
    </pre>
    <p>Выведите с его помощью слово "azul"</p>

    <h3>Решение:</h3>
    <?php
        $arr = [
            'sp'=>['azul', 'rojo', 'verde'],
            'en'=>['blue', 'red', 'green'],
        ];
        var_dump($arr);
        echo 'Требуемое слово - ' . $arr['sp'][0];
    ?>
</body>
</html>