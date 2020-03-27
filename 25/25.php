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
    <p>Создайте массив заработных плат $arr. Выведите на экран зарплату Коли.</p>
    <h3>Решение:</h3>
    <?php
        $arr = [                            // Ассоциативный массив зарплат сотрудников
            'Анжелика'  => 35000.17,
            'Пётр'      => 24600.56,
            'Иван'      => 56477.04,
            'Виктория'  => 65435.50,
            'Коля'      => 12345.67,
            'Саша'      => 56565.55,
            'Виктор'    => 99999.99,
        ];
        define("EMPLOYEE", 'Коля');           // Искомый сотрудник
        echo '<p><i>Зарплаты сотрудников: </i></p>';
        foreach ($arr as $name => $salary) {
            echo $name . ': ' . $salary . '<br>';
        }
        echo '<p><i>Зарплата искомого сотрудника: </i></p>';
        // Существует ли в массиве искомый сотрудник?
        if (array_key_exists(EMPLOYEE, $arr)) {
            echo 'Зарплата сотрудника "' . EMPLOYEE . '" составляет ' .  $arr[EMPLOYEE] . ' рублей';
        } else {
            echo 'Сотрудника "' . EMPLOYEE . '" нет в базе данных.';
        }
    ?>
</body>
</html>