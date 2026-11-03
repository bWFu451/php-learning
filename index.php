<?php 
$whiplash = "brbrbr"; // назначение переменных
$name = "man";
$age = "27";
$city = "pavlodar";
?>
<!DOCTYPE html> // костяк сайта

<html lang="ru">
<head>
    <meta charset="UTF-8"> // стандарт шрифта
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bribribricusbambicus</title> 
</head>
<body>
    <h1>qq! <?php echo $name; ?></h1> // вывод переменных
    <p> age: <?php echo $age; ?> </p>
    <p> city: <?php echo $city; ?> </p>
    <h2> <?php echo $whiplash; ?> </h2>

    <p> <?php echo $name . " живет в " . $city . " ему " . $age . " лет "; ?> </p> // строчка со всей инфой разом
    <p> <?php echo $age + 5; ?> </p>
    <p> 
        <?php
        
        // вывод информации
            if ($age > 100) {
                echo "$age death";
            } elseif ($age == 27) {
                echo "$age KurtKobain";
            } elseif ($age > 17)  {
                echo "$age Old!";
            } else {
                echo "$age Kid!";
            }
        ?> 
        <?php // четное не четное
        for ($i = 1; $i <= 10; $i ++) {
            if ($i % 2) {
                echo "<p> $i нечетное </p>";
            } else {
                echo "<p> $i четное </p>";
            }
        }
        ?>
        // прибавление каждого числа на следующее
        <?php
        for ($i = 1; $i <=10; $i ++) {
            if ($i + 1 ) {
                echo ($i);
            }
        }
        ?>
        // прибавление каждого числа на следующее v2
        <?php 
        $sum = 0;
        for ($i = 1; $i <= 10; $i ++) {
            $sum = $sum + $i;
        }
        echo "<p> $sum </p>";
        ?>
        // таблица умножения в HTML
            <?php
            echo "<table border=1>";
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                for ($j =1; $j <=9; $j++) {
                    echo "<td>$j * $i = " . ($j * $i ) . "</td>"; 
                    }
                echo "</tr>";       
                }
            echo "</table>";
            ?>
    </p>
</body>
</html>
