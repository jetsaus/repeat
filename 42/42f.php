<?php
/*
 * Модуль функций
 */
function season(int $month = 0)
// Возвращает сезон года, в зависимости от месяца
{
    if (($month==12) || ($month==1) || ($month==2)) {
        return 'Зима';
    } elseif (($month==3) || ($month==4) || ($month==5)) {
        return 'Весна';
    } elseif (($month==6) || ($month==7) || ($month==8)) {
        return 'Лето';
    } elseif (($month==9) || ($month==10) || ($month==11)) {
        echo 'Осень';
    } else {
        echo 'Нет такого месяца в году!';
    }
}
