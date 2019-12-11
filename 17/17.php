<<<<<<< HEAD
<?php
    // Если параметры введены
    if ((isset($_POST['place'])) && (isset($_POST['days'])) && (isset($_POST['discount'])))
    {
        // Получение данных их формы    
        $place = $_POST['place'];
        $days = $_POST['days'];
        $discount = $_POST['discount'];
        $cost = $days * 400;
        // Увеличение цены взависимости от страны
        switch ($place) {
            case'Египет':
                $cost = $cost + ($cost/100*10);
            break;
            case 'Италия':
                $cost = $cost + ($cost/100*12);
            break;
        }
        // Уменьшение цены на скидку
        if ($discount === 'true') {
            $cost = $cost - ($cost/100*5);
        }
        echo "Стоимость отдыха - $cost";
    } else {
        echo 'Параметры не определены';
        die;
    }
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 17</title>
</head>
<body>
    <h3>Задача 17:</h3>
    <p>Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет, мир!'.
    </p>
    <h3>Решение:</h3>
    <?php
        // Создание массива
        $array = ['Привет, ', 'мир', '!'];
        // Первый способ
        foreach ($array as $hello) {
            echo $hello;
        }
        echo '<br>';
        // Второй способ
        echo $array[0] . $array[1] . $array[2];
    ?>
</body>
</html>
>>>>>>> 17
