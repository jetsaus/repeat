<?php
/**
 * Модуль с фунциями и данными
 */
function separateArr(string $strArr)
{
    $arr = explode('.', $strArr);
    return $arr;
}