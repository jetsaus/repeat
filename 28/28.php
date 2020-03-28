<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 28</title>
</head>
<body>
    <h3>Задача 28:</h3>
    <p>Создайте массив $arr. Найдите сумму элементов этого массива.</p>
    <h3>Решение:</h3>
    
    <?php
        $arr = [            // Массив
            'a' => 1,
            'b' => 2,
            'c' => 3,
            'd' => 4,
            'e' => 5,
            'f' => 6,
            'g' => 7
        ];
        $sum = 0;           // Сумма элементов массива

        // Отображение массива
        echo 'Массив: <br>';
        foreach ($arr as $k => $v) {
            echo $k . ': ' . $v . '<br>';
        }
        echo '<br>';
        // Поиск и вывод суммы элементов массива
        echo 'Сумма его элементов:' . array_sum($arr);
    ?>
</body>
</html>