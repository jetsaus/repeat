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
        require_once('25cfg.php');
        echo '<p><i>Зарплаты сотрудников: </i></p>';
        foreach ($arr as $name => $salary) {
            echo $name . ': ' . $salary . ' рублей<br>';
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