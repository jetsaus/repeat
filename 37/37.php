<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 37</title>
</head>
<body>
 . . 

    <h3>Задача 37:</h3>
    <p><i>Создайте двухмерный массив. Первые два ключа – это 'ru' и 'en' . Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй – по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник – это первый день).</i></p>
    <p><i>Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' – либо то, либо то), а в переменной $day – номер дня. Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 – то выведем 'среда'.</i></p>

    <h3>Решение:</h3>
    <?php
        echo '<p><i>Создан массив:</i></p>';
        $arr = ['ru' =>
                [1=>'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Восресенье'],
                'en' =>
                [1=>'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        ];
        var_dump($arr);

        // Язык
        $lang = 'ru';
        //$lang = 'en';

        // День недели
        $weekDay = 1;
        //$weekDay = 3; 

        echo '<p><i>Задана переменная $lang = ' . "$lang" . '<br>' .
             'День недели $weekDay = ' . "$weekDay" . '</i></p>';

        echo '<p><i>Вывод необходимого дня недели:</i></p>';
        switch ($lang) {
            case 'ru':
                echo $arr['ru'][$weekDay] . '<br>';
                break;
            case 'en':
                echo $arr['en'][$weekDay] . '<br>';
                break;
        }
    ?>
</body>
</html>