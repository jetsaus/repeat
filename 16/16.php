<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 16</title>
</head>
<body>
    <h3>Задача 16:</h3>
    <p>Пользователь выбирает из выпадающего списка страну (Турция, Египет или
       Италия), вводит количество дней для отдыха и указывает, есть ли у него скидка
       (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
       количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет,
       и на 12%, если выбрана Италия. И далее это число уменьшается на 5%, если указана скидка.</p>
    <h3>Решение:</h3>
    <form>
        <p>
            Место отдыха:
            <select size="1" name="place">
                <option>Турция</option>
                <option>Египет</option>
                <option>Италия</option>
            </select>
            <br><br>
        </p>
        <p>
            Количество дней:
            <input type="number" min=3 max=90 value="7" name="days">
            <br><br>
        </p>
        <p>
            Наличие скидки:
            <input type="radio" value="true" name="discount" checked>Да
            <input type="radio" value="false" name="discount">Нет
            <br><br>
        </p>
        <input type="submit" value="Ввод!">
    </form>
    <br><br>
    <?php
    // Описание переменных
/*        $country = '';              // Страна отдыха
        $days = 0;                  // Количество дней
        $discount = false;          // Наличие скидки
*/        
    // Получение данных их формы    
        echo $_GET['place'];
        echo $_GET['days'];
        echo $_GET['discount'];
    ?>
</body>
</html>