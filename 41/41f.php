<?php
/*
 * Модуль функций
 */
function decade(int $dayMonth = 1)
// Возвращает декаду месяца, в зависимости от числа
{
    // Число в диапазоне от 1 до 31
    if (($dayMonth >= 1) && ($dayMonth <= 31)) {
        $decadeNum = $dayMonth / 10;
        if ($decadeNum <= 1) {
            return 'первая декада';
        } elseif ($decadeNum <= 2) {
            return 'вторая декада';
        } else {
            return 'третья декада';
        }
    } else {
        return 'не существующий день месяца';
    }
}
