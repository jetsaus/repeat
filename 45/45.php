<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 45</title>
</head>
<body>
    <h3>Задача 45:</h3>
    <p><i>Дана строка с цифрами, например, '1234567890'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3. Если это так – выведите 'да', в противном случае выведите 'нет'.</i></p>

    <h3>Решение:</h3>
    <?php
        include_once '45f.php';
        $str = '1234567890';
        //$str = '0987654321';
        echo '<b><i>Строка: </i></b>"' . $str . '", <b><i>Ответ: </i></b>';
        if (check_123($str)) {
            echo 'Да';
        } else {
            echo 'Нет';
        }
        echo '<br>';
    ?>
</body>
</html>