<?php
/**
    Функции для задачи
*/
// Исходные массивы
$array_1    = [1, 2, 3];
$array_2    = ['a','b', 'c'];
$array_3    = [
                [1, 2, 3],
                ['a','b', 'c', 'd', 'e'],
                ['а','б', 'в', 'г', 'д', 'е', 'ё']
];
// Функция слияния массивов
function mergeArray(
    $array1 = [],       // Первый массив
    $array2 = []        // Второй массив
)
{
    $array_0 = [];      // Результирующий массив
    $i = 0;
    while ($i<count($array1)) {
        array_push($array_0, $array1[$i]);
        array_push($array_0, $array2[$i]);
        $i++;
    }
    return $array_0;
}
// Функция слияния массивов из двухмерного массива
function mergeManyArray(
    $arrayMany = []     // массив массивов, которые необходимо слить
)
{
    // Подсчитаем размер максимального массива
    $maxLenght = 0;                                     // Размер максимального массива
    foreach ($arrayMany as $array) {
        $maxLenght = max(count($array), $maxLenght);    // Определим размер максимального массива
    }
    // Сольём массивы
    $result = [];                                       // Результирующий массив
    for ($i = 0; $i < $maxLenght; $i++) {               // Цикл по максимальному количеству элементов в массивах
        foreach ($arrayMany as $array) {
            if (isset($array[$i])) {
                $result[] = $array[$i];
            }
        }
    }
    return $result;
}