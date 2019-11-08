<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 5</title>
</head>
<body>
    <h3>Задача 5:</h3>
    <p>Даны три ненулевых числа $a = 4, $b = 8, $c = 3. Найдите всевозможные результаты деления суммы двух из них на оставшееся третье число.</p>
    <h3>Решение:</h3>
    <?php
        $a = 4;
        $b = 8;
        $c = 3;
        $result;
        $result = ($a + $b)/$c;
        echo "($a + $b)/$c = $result"; echo '<br>';
        $result = ($a + $c)/$b;
        echo "($a + $c)/$b = $result"; echo '<br>';
        $result = ($b + $c)/$a;
        echo "($b + $c)/$a = $result"; echo '<br>';

    ?>
    
</body>
</html>