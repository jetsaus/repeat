<?php
/**
    Функции для задачи
*/
// Создание многоуровнего массива
function getMultiArray($level)
{
    $result = $level;
    for ($i=1; $i<=$level; $i++) {
        $result = [$result];
    }
    return $result;
}
// Создание странного массива
function strangeArray($level)
{
    $result = [];
    for ($i=1; $i<=$level; $i++) {
        $result[$i] = getMultiArray($i);
    }
    return $result;
}