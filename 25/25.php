<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 25</title>
</head>
<body>
    <h3>Задача 25:</h3>
    <p>25.Создайте массив заработных плат $arr. Выведите на экран зарплату Коли. Решение: чтобы вывести зарплату Коли следует вывести значение элемента массива с ключом 'Коля'.</p>
    <h3>Решение:</h3>
    <?php
        // Ассоциативный массив зарплат сотрудников
        $arr = [
            'Анжелика'  => 35000.17,
            'Пётр'      => 24600.56,
            'Иван'      => 56477.04,
            'Виктория'  => 65435.50,
            'Коля'      => 12345.67,
            'Саша'      => 56565.55,
            'Виктор'    => 99999.99,
        ];
        echo '<p><i>Зарплаты сотрудников: </i></p>';
        foreach ($arr as $name => $salary) {
            echo $name . ': ' . $salary . '<br>';
        }
    ?>
</body>
</html>