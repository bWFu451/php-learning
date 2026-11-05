<?php 
$fruits = ["яблоко", "груша", "слива"]; // массив из трёх значений

echo $fruits[0]; // яблоко
echo $fruits[2]; // слива

foreach ($fruits as $fruit) {
    echo "<p>$fruit</p>";
}
?>