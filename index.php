<?php 
$whiplash = "brbrbr";
$name = "man";
$age = "27";
$city = "pavlodar";
?>
<!DOCTYPE html>

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

    <p> <?php echo $name . " живет в " . $city . " ему " . $age . " лет "; ?> </p>
    <p> <?php echo $age + 5; ?> </p>
    <p> 
        <?php
        

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
        <?php
        for ($i = 1; $i <= 10; $i ++) {
            if ($i % 2) {
                echo "<p> $i нечетное </p>";
            } else {
                echo "<p> $i четное </p>";
            }
        }
        ?>

        <?php
        for ($i = 1; $i <=10; $i ++) {
            if ($i + 1 ) {
                echo ($i);
            }
        }
        ?>

        <?php 
        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum = $sum + $i;
        }
        echo "<p> $sum </p>";
        ?>
    </p>
</body>
</html>
