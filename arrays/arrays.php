<?php 
$film = ["1 + 1", "Wall-e", "TheBatman", "Ratatouille", "Project Heil Mary" , "Fight Club", "TheNotebook"]; // массив из семи значени
echo "first: " . $film[0] . "<br>" . "last: " . $film[count($film) - 1];
    echo "<ul>";
foreach ($film as $favorite) {
    echo "<li>$favorite</li>";
}
    echo "</ul>";
    echo (count($film ) . " all"); // подсчет пунктов
?>