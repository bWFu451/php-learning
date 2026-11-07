<?php
$me = ["name" => "Javeer", "age" => 27, "type" => "man", "city" => "NewYork", "FavoriteGame" => "EldenRing"];
$me["stack"] = "backend";
echo "Say my: " . $me["name"] . "<br>" . "you god damn: " . $me["stack"];
echo "<table border=1>";
foreach ($me as $key => $value) {
    echo "<tr>  <td>$key:</td>  <td> $value </td>";
    echo "</tr>";
}
echo "</table>";
?>