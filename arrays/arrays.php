<?php 
$film = ["1 + 1", "Wall-e", "TheBatman", "Ratatouille", "Project Heil Mary" , "Fight Club", "TheNotebook"]; // массив из семи значени
echo "first: " . $film[0] . "<br>" . "last: " . $film[count($film) - 1];
    echo "<ul>";
foreach ($film as $favorite) {
    echo "<li>$favorite</li>";
}
    echo (count($film ) . " all"); // подсчет пунктов
    echo "</ul>";
    // echo (count($film ) . " all"); // подсчет пунктов
?>
<?php
$me = ["name" => "Javeer", "age" => 18, "type" => "man", "city" => "pavlodar", "FavoriteGame" => "EldenRing"];

echo $me["name"];

foreach ($me as $key => $value) {
    echo "<p>$key: $value</p>";
}
?>