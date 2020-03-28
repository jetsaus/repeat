<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 27</title>
</head>
<body>
    <h3>Задача 27:</h3>
    <p>Создайте массив $arr. a =>1, b=>2, c=>3. Выведите на экран элемент с ключом 'b'.</p>
    <h3>Решение:</h3>
    
    <?php
        // Создание массива
        $arr = [
            'a' => 1,
            'b' => 2,
            'b' => 3
        ];
        // Вывод элемента с ключом b
        echo "Элемент с ключом 'b': " . $arr['b'];
    ?>
</body>
</html>