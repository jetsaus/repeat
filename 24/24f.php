<?php
/**
 * Функция сложения времени
 * 
 * @param   integer $lHour      // Часы - левое слагаемое
 * @param   integer $lMin       // Минуты - левое слагаемое
 * @param   integer $rHour      // Часы - правое слагаемое
 * @param   integer $rMin       // Минуты - правое слагаемое
 * @return  string  $time       // Результат сложения времени в формате "ЧЧ:ММ"
 */
 function addTime (
     $lHour = 0,        // Часы - левое слагаемое
     $lMin  = 0,        // Минуты - левое слагаемое
     $rHour = 0,        // Часы - правое слагаемое
     $rMin  = 0         // Минуты - правое слагаемое
 )
{
    $buffer = 0;        // Буфер для расчетов времени
    $hour = 0;          // Часы
    $min = 0;           // Минуты
    // Сложение времени с переводом в минуты
    $buffer = ($lHour * 60) + $lMin;            // Перевод левого слагаемого времени в минуты
    $buffer = $buffer + ($rHour*60) + $rMin;    // Перевод правого слагаемого времени в минутыи сложение его с буфером
    $hour = intdiv($buffer, 60);                // Определение суммы часов
    $min = $buffer % 60;                        // Определение сыммы минут

    // Возвращение результате в формате строки "ЧЧ:ММ"
    return strval($hour) . ':' . strval($min);
}