<?php
    echo "<table border=1>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            for ($j =1; $j <=9; $j++) {
                    if (($j * $i) % 2 == 0) {
                        echo "<td style='background-color:lightgreen'>$j * $i = " . ($j * $i) . " even" . "</td>";  
                    } else {
                echo "<td style='background-color:lightcoral'>$j * $i = " . ($j * $i) . " odd" . "</td>"; 
                }
            }
            echo "</tr>";       
        }
    echo "</table>";
?>
<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i > 2) {
        $bg = "lightgreen";
        $text = "сдал";
    } else {
        $bg = "lightcoral";
        $text = "не сдал";
    }
    echo "<p style='background-color:$bg'>$i $text</p>";
}
?>
<?php 
    echo "<table border=1";
        for ($i= 1; $i <= 9; $i ++) {
            echo "<tr>";
            for ($j= 1; $j <= 9; $j ++) {
                if (($j * $i) % 2 == 0) {
                    $bg = "lightgreen";
                    $text = "even";
            } else {
                    $bg = "lightcoral";
                    $text = "odd";
            }
            echo "<td style='background-color:$bg'>$i $text</td>";
        }
            echo "</tr>";
    }
    echo "</table>";
?>