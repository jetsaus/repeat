<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 22</title>
</head>
<body>
    <h3>Задача 22:</h3>
    <p>Задача «Хитрое слияние массивов»*:</p>
    <ol>
        <li>
        <p>
        Напишите функцию, которая будет сливать два массива таким образом: из, к примеру, [1, 2, 3] и ['a', 'b', 'c'] она сделает [1, 'a', 2, 'b', 3, 'c']. При условии того, что массивы одинаковой размерности.
        </p>
        </li>            
        <h3>Решение:</h3>
        <p><i>Исходные массивы:</i></p>
        <?php
            // Отображение исходных массивов
            require_once('22f.php');
            echo 'Массив 1: ';
            foreach($array_1 as $arrEl) {
                echo $arrEl . ' ';
            }
            echo ', ';
            echo ' Массив 2: ';
            foreach($array_2 as $arrEl) {
                echo $arrEl  . ' ';
            }
        ?>    
        <p><i>Результат слияния:</i></p>
        <?php
            $array_merge = mergeArray($array_1, $array_2);
            foreach($array_merge as $arrEl) {
                echo $arrEl . ' ';
            }
        ?>
        <li>
        <p>
        Сделайте аналогичную функцию, которая параметрами будет принимать не два массива, а произвольное количество (пусть функция параметром принимает двухмерный массив, где его подмассивы – это то, что мы будем сливать).
        </p>
        </li>            
        <h3>Решение:</h3>
        <p><i>Исходный двухмерный массив:</i></p>
        <?php
            $i = 1;
            foreach($array_3 as $arrSubArr) {           // Цикл по массиву массивов
                echo 'Под-массив ' . $i . ': ';
                $i++;
                foreach($arrSubArr as $arrEl) {         // Цикл по вложенному массиву
                    echo $arrEl . ' ';
                }
                echo '<br>';
            }
        ?>
        <p><i>Результат слияния:</i></p>
        <?php
            $arrayMerge = mergeManyArray($array_3);     // Слияние массивов в $arrayMerge
            // Вывод результатов
            foreach ($arrayMerge as $arrayEl) {
                echo $arrayEl . ' ';
            }
        ?>
    </ol>        
</body>
</html>