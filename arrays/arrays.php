<?php 
$film = ["1 + 1", "Wall-e", "TheBatman", "Ratatouille", "Project Heil Mary"]; // массив из пяти значени
echo "<br> first" . $film[0] . "last" . $film[4] . "</br>";
    echo "<ul>";
foreach ($film as $favorite) {
    echo "<li>$favorite</li>";
}
    echo "</ul>";
    echo (count($film ) . " all"); // подсчет пунктов
?>