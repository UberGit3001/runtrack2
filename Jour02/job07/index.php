<?php
$hauteur = 5;  // Height of the triangle / Hauteur du triangle

echo "<pre>"; // Preserve formatting / Préserver le formatage

// Loop through each row / Boucle pour chaque ligne
for ($i = 1; $i <= $hauteur; $i++) {

    // Print "*" $i times for the current row / Affiche "*" $i fois pour la ligne actuelle
    echo str_repeat("*", $i);

    echo "\n"; // Move to next line / Passe à la ligne suivante
}

echo "</pre>";
?>


<br><br>
<?php
$hauteur = 5;  // Height of the isosceles triangle / Hauteur du triangle isocèle

echo "<pre>"; // Preserve formatting / Préserver le formatage

for ($i = 1; $i <= $hauteur; $i++) {
    // Calculate the number of spaces before stars / Calculer le nombre d'espaces avant les étoiles
    $spaces = $hauteur - $i;
   

    // Calculate the number of stars for current row / Calculer le nombre d'étoiles pour la ligne actuelle
    $stars = 2 * $i - 1;

    // Print spaces / Afficher les espaces
    echo str_repeat(" ", $spaces );

    // Print stars / Afficher les étoiles
    echo str_repeat("*", $stars);

    echo "\n"; // Move to next line / Passe à la ligne suivante
}

echo "</pre>";
?>
