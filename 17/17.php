<?php
    // Если параметры введены
    if ((isset($_POST['place'])) && (isset($_POST['days'])) && (isset($_POST['discount'])))
    {
        // Получение данных их формы    
        $place = $_POST['place'];
        $days = $_POST['days'];
        $discount = $_POST['discount'];
        $cost = $days * 400;
        // Увеличение цены взависимости от страны
        switch ($place) {
            case'Египет':
                $cost = $cost + ($cost/100*10);
            break;
            case 'Италия':
                $cost = $cost + ($cost/100*12);
            break;
        }
        // Уменьшение цены на скидку
        if ($discount === 'true') {
            $cost = $cost - ($cost/100*5);
        }
        echo "Стоимость отдыха - $cost";
    } else {
        echo 'Параметры не определены';
        die;
    }