<?php
function mult_table($a, $b)
{
    $result = $a * $b;
    return "<td>" . "$a * $b = " . ($result) . "</td>";
}
echo "<table border=1>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo mult_table ($i, $j);
    }
    echo "</tr>";
}
echo "</table>";
