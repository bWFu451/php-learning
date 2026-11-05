<?php 
$film = [" 1 + 1 ", " Wall-e ", " TheBatman ", " Ratatouille ", " Project Heil Mary "]; // массив из пяти значени
echo $film[0];
echo $film[4];
    echo "<ul>";
foreach ($film as $favorite) {
    echo "<li>$favorite</li>";
}
    echo "</ul>";
    echo (count($film ) . " all"); // подсчет пунктов
?>