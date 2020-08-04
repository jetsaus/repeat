<?php
/**
 *  Модуль функций
 */
// Проверка на присутствие 1, 2 или 3 в первом символе строки
// Возвращает true или false
function check_123(string $str='') {
    if ($str[0]=='1' || $str[0]=='2' || $str[0]=='3') {
        return true;
    } else {
        return false;
    }
}
