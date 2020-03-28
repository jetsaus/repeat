<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 26</title>
</head>
<body>
    <h3>Задача 26:</h3>
    <p>Создайте массив $arr с элементами 1, 2, 3, 4, 5 двумя различными способами.</p>
    <h3>Решение:</h3>
    
    <?php
        echo '<p>Первый способ: ';
        $arr = array(1, 2, 3, 4, 5);
        foreach ($arr as $v) {
            echo $v . ' ';
        }
        echo '</p>';
        unset($arr);

        echo '<p>Второй способ: ';
        $arr = [1, 2, 3, 4, 5];
        foreach ($arr as $v) {
            echo $v . ' ';
        }
        echo '</p>';
        unset($arr);

        echo '<p>Третий способ: ';
        // Создание массива
        $arr = [];
        for ($i=1; $i<=5; $i++) {
            $arr[] = $i;
        }
        // Вывод массива
        foreach ($arr as $v) {
            echo $v . ' ';
        }
        echo '</p>';
        unset($arr);
    ?>
</body>
</html>