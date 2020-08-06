<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 47</title>
</head>
<body>
    <h3>Задача 47:</h3>
    <p><i>Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так – выведите 'да', в противном случае выведите 'нет'.</i></p>

    <h3>Решение:</h3>
    <?php
        //$str = '123456';
        $str = '123321';
        echo 'Задана строка: <b><i>' . $str . '</i></b><br>';
        echo 'Сумма первых 3-х цифр равна сумме вторых 3-х? - <b><i>';
        if (($str[0]+$str[1]+$str[2])==($str[5]+$str[4]+$str[3])) {
            echo 'Да';
        } else {
            echo 'Нет';
        }
        echo '</i></b>';
    ?>
</body>
</html>