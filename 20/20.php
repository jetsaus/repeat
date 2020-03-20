<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 20</title>
</head>
<body>
    <h3>Задача 20:</h3>
    <p>Дан массив с числами. Запишите в новый массив только те числа, в которых есть цифра 5.</p>
    <h3>Решение:</h3>
    <?php
        include_once('20f.php');
        // исходный массив
        $arrAll = [
            5, 23214, 4543222, 3453434, -77657878, 678678667, 34343210, 56567565, 689009,
            43212123, 787878, 5, 77878667, 2323, 7876575, 342211, 8900987, 3212121123
        ];
        // массив чисел с цифрой 5
        $arrFive = [];

        echo '<p>Исходный массив:</p>';
        foreach($arrAll as $arrEl) {
            echo "$arrEl ";
        }

        // Заполним массив числами с цифрой 5
        foreach($arrAll as $arrEl) {
            if (findNumNonRec($arrEl, 5)) {
                $arrFive[] = $arrEl;
            }
        }

        echo '<p>Массив чисел с цифрой 5:</p>';
        foreach($arrFive as $arrEl) {
            if(!next($arrFive)) {                   // Это последний элемент массива, без запятой
                echo "$arrEl";
            } else {
                echo "$arrEl, ";                    // Это не последний элемент массива, ставим запятую
            }
        }

    ?>
</body>
</html>