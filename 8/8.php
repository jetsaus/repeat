<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задача 8</title>  
</head>
<body>
    <h3>Задача 8:</h3>
    <p>Дано число $number. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.</p>
    <h3>Решение:</h3>
    <?php
        $number = 15;
        echo "<p>\$number = $number</p>";
        if ($number > 10) {
            $number += 100;
            echo "<p>\$number больше 10, увеличим на 100. \$number = $number</p>";
        } else {
            $number -= 30;
            echo "<p>Иначе уменьшим на 30. \$number = $number</p>";
        }
    ?>
    
</body>
</html>