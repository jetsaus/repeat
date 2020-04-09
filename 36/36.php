<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 36</title>
</head>
<body>
 . . 

    <h3>Задача 36:</h3>
    <p><i>Создайте двухмерный массив. Первые два ключа – это 'ru' и 'en' . Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй – по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник – это первый день).</i></p>

    <h3>Решение:</h3>
    <p><i>Создан массив:</i></p>
    <?php
        $arr = ['ru' =>
                ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Восресенье'],
                'en' =>
                ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        ];
        
       var_dump($arr);

       echo '<p><i>Вывод необходимых дней недели:</i></p>';

       echo $arr['ru'][0] . '<br>';
       echo $arr['en'][2] . '<br>';
    ?>
</body>
</html>