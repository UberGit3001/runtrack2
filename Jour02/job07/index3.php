<?php
/**
 * Affiche un triangle isocèle avec espaces externes et internes,
 * terminé par une base soulignée entre les deux barres obliques.
*/


$hauteur = 5; // Hauteur du triangle

echo "<pre>"; // Préserve le formatage HTML

for ($i = 1; $i <= $hauteur; $i++) {
    // Espaces externes à gauche pour centrer le triangle
    echo str_repeat("&nbsp;", $hauteur - $i);

    // Affiche la barre oblique gauche
    echo "/";

    // Espaces internes entre les deux barres obliques
    if ($i == 1) {
        // Pas d'espace interne à la première ligne
        // (on n'affiche rien)
        } else {
        echo str_repeat("&nbsp;", 2 * ($i - 1) - 1);
    }

    // Affiche la barre oblique droite
    echo "\\";

    echo "\n"; // Passe à la ligne suivante
}

// Affiche la base du triangle (soulignée)
echo str_repeat("&nbsp;", 0); // Pas d'espace externe à la base
echo "/";
echo str_repeat("_", 2 * $hauteur - 3); // Base soulignée
echo "\\";
echo "</pre>";
?>