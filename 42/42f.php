<?php
/*
 * Модуль функций
 */
    function seasonIf(int $month=0)
    // Возвращает сезон года, в зависимости от месяца
    {
        if (($month==12) || ($month==1) || ($month==2)) {
            return 'Зима';
        } elseif (($month==3) || ($month==4) || ($month==5)) {
            return 'Весна';
        } elseif (($month==6) || ($month==7) || ($month==8)) {
            return 'Лето';
        } elseif (($month==9) || ($month==10) || ($month==11)) {
            return 'Осень';
        } else {
            return 'Нет такого месяца в году!';
        }
    }
    function seasonCase(int $month=0)
    // Возвращает сезон года, в зависимости от месяца
    {
    switch ($month) {
        case (($month==12) || ($month==1) || ($month==2)):
            return 'Зима';
        case (($month==3) || ($month==4) || ($month==5)):
            return 'Весна';
        case (($month==6) || ($month==7) || ($month==8)):
            return 'Лето';
        case (($month==9) || ($month==10) || ($month==11)):
            return 'Осень';
        default:
            return 'Нет такого месяца в году!';
    }
}