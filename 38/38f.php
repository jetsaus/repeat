<?php
/**
 * Модуль с фунциями и данными
 */
function array_get($array, $key)
{
    $keys = explode('.', $key);
    $result = $array;
    while ($k=array_shift($keys)) {
        if(empty($result[$k])) {
            throw new Exception('element ' . $key . 'found');
        }
        $result = $result[$k];
    }
    return $result;
}