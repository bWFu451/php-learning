<?php
function mult_table($a, $b)
{
    $result = $a * $b;
    if ($result % 2) {
        $color = "rgb(255, 30, 30)";
        $info = "odd";
    } else {
        $color = "#90ee90";
        $info = "even";
    } return "<td style='background-color:$color'>" . "$a * $b = " . ($result) . "<br>" . ($info) . "</td>";
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
?>