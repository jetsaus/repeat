<?php
    /**
     *  Модуль процедур
     */
    // Суммирование цифр целого числа
    function sumDigits(int $number) {
        $trans = $number;                   // Объявим промежуточный накопитель
        $result = 0;                        // Объявим результирующее число
        do {
            $result += $trans % 10;         // Остаток от деления на 10 добавим в результирующее число
            $trans = floor($trans/10);      // В результирующий накопитель занесем оставшееся числа, за минусом уже добавленного
        } while ($trans != 0);              // Пока промежуточное число <> 0
        return $result;
    }