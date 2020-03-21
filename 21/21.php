<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 21</title>
</head>
<body>
    <h3>Задача 21:</h3>
    <p>Задача «Cтранный массив»*: Создайте массив вида [1, [2], [[3]], [[[4]]] ], вместо 4 может быть любое целое значение. К примеру, если 5 – тогда будет массив [1, [2], [[3]], [[[4]]], [[[[5]]]] ].</p>
    <h3>Решение:</h3>
    <?php
        require_once('21f.php');
        $quantity = 5;                              // Количество вложений массива
        $strangeArray = strangeArray($quantity);
        var_dump($strangeArray);
        //print_r($strangeArray);
    ?>
</body>
</html>