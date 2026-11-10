<?php
$whiplash = "brbrbr"; // назначение переменных
$name = "man";
$age = "27";
$city = "pavlodar";
?>
<!DOCTYPE html>
<!-- бубубу -->
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bribribricusbambicus</title>
</head>

<body>
    <h1>qq! <?php echo $name; ?></h1>
    <p> age: <?php echo $age; ?> </p>
    <p> city: <?php echo $city; ?> </p>
    <h2> <?php echo $whiplash; ?> </h2>
    <!-- строчка со всей инфой разом -->
    <p> <?php echo $name . " живет в " . $city . " ему " . $age . " лет "; ?> </p>
    <p> <?php echo $age + 5; ?> </p>
    <p>
        <?php

        // вывод информации
        if ($age > 100) {
            echo "$age death";
        } elseif ($age == 27) {
            echo "$age KurtKobain";
        } elseif ($age > 17) {
            echo "$age Old!";
        } else {
            echo "$age Kid!";
        }
        ?>
        <?php // четное не четное
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2) {
                echo "<p> $i нечетное </p>";
            } else {
                echo "<p> $i четное </p>";
            }
        }
        ?>
        <?php // прибавление каждого числа на следующее
        for ($i = 1; $i <= 10; $i++) {
            if ($i + 1) {
                echo ($i);
            }
        }
        ?>
        <?php // прибавление каждого числа на следующее v2
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum = $sum + $i;
        }
        echo "<p> $sum </p>";
        ?>
        <?php  // Таблица умножения 
        echo "<table border=1>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                if (($j * $i) % 2 == 0) {
                    $bg = "lightgreen";
                    $text = "even";
                } else {
                    $bg = "lightcoral";
                    $text = "odd";
                }
                echo "<td style='background-color:$bg'>$j * $i = " . ($j * $i) . " $text" . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </p>
</body>

</html>