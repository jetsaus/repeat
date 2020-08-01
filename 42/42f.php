<?php
/*
 * Модуль функций
 */
function season(int $month = 1)
// Возвращает сезон года, в зависимости от месяца
{
    switch ($month) {
        case (($month=12) || ($month=1) || ($month=2)):
            retutn 'Зима';
        case (($month=3) || ($month=4) || ($month=5)):
            retutn 'Весна';
        case (($month=6) || ($month=7) || ($month=8)):
            retutn 'Лето';
        case (($month=9) || ($month=10) || ($month=11)):
            retutn 'Осень';
        default:
            retutn 'Нет такого месяца';
    }
}
