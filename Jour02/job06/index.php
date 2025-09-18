<?php
$largeur = 20;  // Width of the rectangle / Largeur du rectangle
$hauteur = 10;  // Height of the rectangle / Hauteur du rectangle

echo "<pre>"; // Preserve formatting / Préserver le formatage

for ($i = 1; $i <= $hauteur; $i++) {

    // Check if it is the first or last row / Vérifie si c'est la première ou dernière ligne
    if ($i == 1 || $i == $hauteur) {
        // Print full line of "*" / Affiche une ligne complète d'étoiles "*"
        echo str_repeat("*", $largeur) . "\n";
        
        // Print full line of "-" / Affiche une ligne complète d'étoiles "-"
        // echo str_repeat("-", $largeur) . "\n";
    } else {
        // Print borders with "*" and spaces in between / Affiche les bordures avec "*" et des espaces au milieu
        echo "*" . str_repeat(" ", $largeur - 2) . "*"  . "\n";
        
        // Print borders with "I" and spaces in between / Affiche les bordures avec "I" et des espaces au milieu
        //  echo "I" . str_repeat(" ", $largeur - 2) . "I" . "\n";
    }

    echo "\n"; // Move to next line / Passe à la ligne suivante
}

echo "</pre>";
?>
