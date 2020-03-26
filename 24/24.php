<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 24</title>
</head>
<body>

<?php
    // Обработчик сложения времени
    require_once('24f.php');
    //Проверка существования результатов POST-запроса и присвоение его значений переменным
    if (count($_POST)) {
        if (isset($_POST['lH'])) {
            $lH = $_POST['lH'];
        } else {
            $lH = 0;
        }
        if (isset($_POST['lM'])) {
            $lM = $_POST['lM'];
        } else {
            $lM = 0;
        }
        if (isset($_POST['rH'])) {
            $rH = $_POST['rH'];
        } else {
            $rH = 0;
        }
        if (isset($_POST['rM'])) {
            $rM = $_POST['rM'];
        } else {
            $rM = 0;
        }
        // Вызов функции сложения времени
        if(isset($lH) && isset($lM) && isset($rH) && isset($rM)) {
            $result = addTime($lH, $lM, $rH, $rM);
        }
    
    }
?>

<h3>Задача 24:</h3>
<p>Задача «Сложение времени»****:</p>
   Напишите функцию, которая корректно будет складывать часы и минуты. Примеры: на вход функции подается такое – 1ч20мин+50мин – в результатте функция выведет 2ч10мин.*** (Задача решается разными способами, приведите пример одного из них)
    <h3>Решение:</h3>
    <!-- Форма ввода слагаемых времени -->
    <form method="post">
        <input type="number" size="3" name="lH" min="0" max="59" value="<?php if (isset($lH)) echo $lH;?>"  required>
        <span>час.</span>
        <input type="number" size="3" name="lM" min="0" max="59" value="<?php if (isset($lM)) echo $lM;?>"  required>
        <span>мин.</span>
        <b>+</b>
        <input type="number" size="3" name="rH" min="0" max="59" value="<?php if (isset($rH)) echo $rH;?>"  required>
        <span>час.</span>
        <input type="number" size="3" name="rM" min="0" max="59" value="<?php if (isset($rM)) echo $rM;?>"  required>
        <span>мин.</span>
        <input type="submit" value="=">
        <input type="text" name="result" value="<?php if (isset($result)) echo $result; ?>" readonly>
    </form>                    

</body>
</html>