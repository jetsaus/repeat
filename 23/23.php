<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 23</title>
</head>
<body>
    <h3>Задача 23:</h3>
    <p>Дан массив вида [1, ' , 2, ' , ' , 3] – то есть в нем есть пустые строки. Удалите все такие элементы из этого массива.*</p>
    <h3>Решение:</h3>
    <?php
        // Исходный массив
        $array = [1, 2, 3, '', '', 6, 7, '', 9];
        echo '<p><i>Исходный массив: </i></p>';
        foreach ($array as $arrEl) {
            if ($arrEl == '') {
                echo "' '";
            }
            echo $arrEl . ', ';
        }
        // Удаление пустые элементы из массива
        $arrayNotEmpty = array_filter($array);

        echo '<p><i>Массив без пустых элементов: </i></p>';
        foreach ($arrayNotEmpty as $arrEl) {
            if ($arrEl == '') {
                echo "' '";
            }
            echo $arrEl . ', ';
        }
    ?>
</body>
</html>