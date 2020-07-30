<?php
/*
 * Модуль функций
 */
function season(int $seasonNumber = 1)
// Возвращает текстовое значение сезона, соответствующее числовому
{
        switch ($seasonNumber) {
            case 1:
              return 'Зима';
            case 2:
                return 'Весна';
            case 3:
                return 'Лето';
            case 4:
                return 'Осень';
            default:
                return 'Межсезонье!';
        }
}
