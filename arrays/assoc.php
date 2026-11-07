<?php
echo "<table border=1>";
$me = ["name" => "Javeer", "age" => 27, "type" => "man", "city" => "NewYork", "FavoriteGame" => "EldenRing"];
$me["stack"] = "backend";

        foreach ($me as $key => $value) {
            echo "<tr>";                
                   echo "<td>$key: $value</td>"; 
    echo "</tr>";
                   }
echo "</table>";
?>