<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 35</title>
</head>
<body>
 . . 

    <h3>Задача 35:</h3>
    <p><i>Создайте многомерный массив $arr.
    <pre>
        $arr = ['cms'=>
                ['joomla', 'wordpress', 'drupal'],
                'colors'=>
                ['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый'],
        ];
    </pre>
            С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный’.</i></p>

    <h3>Решение:</h3>
    <p><i>Создан массив:</i></p>
    <?php
        $arr = ['cms'=>
                ['joomla', 'wordpress', 'drupal'],
                'colors'=>
                ['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый'],
        ];
        
       var_dump($arr);
       echo '<p><i>Вывод слов:</i></p>';
       echo $arr['cms'][0] . '<br>';
       echo $arr['cms'][2] . '<br>';
       echo $arr['colors']['green'] . '<br>';
       echo $arr['colors']['red'] . '<br>';
    ?>
</body>
</html>