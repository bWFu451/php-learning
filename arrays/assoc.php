<?php
echo "<table border=1>";
$me = ["name" => "Javeer", "age" => 27, "type" => "man", "city" => "NewYork", "FavoriteGame" => "EldenRing"];
$me["stack"] = "backend";
    echo "<tr>";
    // echo $me["name"];

        foreach ($me as $key => $value) {
            echo "<td>$key: $value</td>";
    }
        echo $me["name"];
    echo "</tr>";
echo "</table>";
?>