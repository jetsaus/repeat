<?php
/* Модуль с функциями */

/** Функция определяет наличие определенной цифры в заданном числе, возвращает boolean,
 *  не рекурсивно
 * 
 * @param   numeric    $number   заданное число
 * @param   numeric    $numeral  заданное число
 * @return  boolean              true, если есть, false, если его нет в числе
*/
function findNumNonRec(
    $number = 0,    // Заданное число
    $numeral = 0    // Определяемая цифра
)
{
    $trans  = $number;                  // Объявим промежуточный накопитель
    $flag   = false;                    // Флаг возврата
    do {
        if (($trans % 10)==$numeral) {   // Остаток от деления на 10 равен заданному числу
            return true;
        } else {

        }
        $trans = floor($trans/10);      // Отбросим уже проверенную часть числа
    } while ($trans != 0);              // Пока промежуточный накопитель <> 0

}