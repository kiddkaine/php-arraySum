<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Обучение PHP</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            function arrSum($numbers, $condition)
            {
                $result = 0;

                foreach ($numbers as $number)
                {
                    if ($condition($number)) $result += $number;

                    return $result;
                }
            }

            $myNumbers = [-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5];

            $positiveSum = arrSum($myNumbers, fn($n) => $n > 0);
            $evenSum = arrSum($myNumbers, fn($n) => $n % 2 == 0);

            echo "<h1>Сумма положительных чисел: $positiveSum</h1><h1>Сумма чётных чисел: $evenSum</h1>";
        ?>
    </body>
</html>