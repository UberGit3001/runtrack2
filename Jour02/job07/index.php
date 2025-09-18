<!-- premier triangle rectagle etoile -->
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




<!-- *********************  deuxieme triangle isosceles avec etoile , ça marche  *************************** -->
<?php
$hauteur = 5;  // Height of the isosceles triangle / Hauteur du triangle isocèle

echo "<pre>"; // Preserve formatting / Préserver le formatage

for ($i = 1; $i <= $hauteur; $i++) {
    // Calculate the number of spaces before stars / Calculer le nombre d'espaces avant les étoiles
    $spaces = $hauteur - $i;
    
    
    // Calculate the number of stars for current row / Calculer le nombre d'étoiles pour la ligne actuelle
    $stars = 2 * $i - 1;
    
    // Print spaces / Afficher les espaces
    // echo str_repeat("&nbsp;", $spaces );
    echo str_repeat(" ", $spaces );
    
    // Print stars / Afficher les étoiles
    echo str_repeat("*", $stars);
    
    echo "\n"; // Move to next line / Passe à la ligne suivante
}

echo "</pre>";
?>
<!-- ***********************  
        troisieme triangle   
 *********************** -->

<?php
$slash = "/";
$antiSlash="\\";
$spaceVisual = "&nbsp;";
$hauteur = 5;  // Height of the diamond / Hauteur du losange
$largeur = 2 * $hauteur - 1; // Width of the diamond / Largeur du losange
$milieu = ceil($largeur / 2); // Middle position / Position du milieu
echo "<pre>"; // Preserve formatting / Préserver le formatage

for($i=1; $i <= $hauteur; $i++) {
    // Calculate spaces before the slashes / Calculer les espaces avant les barres obliques
    $spacesBefore = $milieu - $i;

    
    // Calculate inner spaces between the slashes / Calculer les espaces intérieurs entre les barres obliques
    // $innerSpaces = 2 * ($i - 1);
    $innerSpaces = 2 * ($i - 1) + 2; // -1 car on compte pas l'espace avant le slash gauche   
    
    // Print leading spaces / Afficher les espaces avant
    echo str_repeat($spaceVisual, $spacesBefore);

    echo $spaceVisual; // espace avant le slash
    
    // Print left slash / Afficher la barre oblique gauche
    echo $slash;

    // Print inner spaces (except for the first row) / Afficher les espaces intérieurs sauf pour la première ligne
    if ($i >= 1) {
        echo str_repeat($spaceVisual, $innerSpaces);
    } 
    // // elseif ($i == 1) {
    // //     // echo $spaceVisual; // pour la deuxième ligne un espace entre les deux barres
    // //     echo $spaceVisual . $spaceVisual; // pour la deuxième ligne pas d'espace entre les deux barres
    // }


    // Print right slash / Afficher la barre oblique droite
    echo $antiSlash;

    
    echo "\n"; // Move to next line / Passe à la ligne suivante


}

// Affiche la base du triangle (soulignée)
echo str_repeat("&nbsp;", 0); // Pas d'espace externe à la base
echo "/";
echo str_repeat("_", 2 * $hauteur - 1); // Base soulignée
// echo str_repeat("_", 2 * $hauteur + 2); // Base soulignée
echo "\\";

echo "</pre>"; // Preserve formatting / Préserver le formatage

echo strlen(str_repeat("_", 2 * $hauteur - 1)); // longueur de la base
?>
<br><br>




<!-- **************************************************
    ok bon mais probleme de longeur et espace a la base
 *************************************************** -->
<?php
$hauteur = 5; // Height of the triangle / Hauteur du triangle

echo "<pre>"; // Preserve formatting / Préserver le formatage

// Loop through each row / Boucle pour chaque ligne
for ($i = 1; $i <= $hauteur; $i++) {
    $spaces = $hauteur - $i;          // Spaces before / / Espaces avant le /
    $inner = 2 * ($i - 1);            // Spaces between / and \ / Espaces entre / et \

    // Print leading spaces / Affiche les espaces avant
    echo str_repeat("&nbsp;", $spaces);

    // Print left slash / Affiche le /
    echo "/";

    // Print inner spaces (except first row) / Espaces intérieurs sauf la première ligne
    if ($inner > 0) {
        echo str_repeat("&nbsp;", $inner);
    }

    // Print right slash / Affiche le \
    echo "\\";

    echo "\n"; // Move to next line / Passe à la ligne suivante
}

// Print the base / Affiche la base du triangle
echo "/";
echo str_repeat("_", 2 * $hauteur - 1); // underscores for the base / underscores pour la base
echo "\\";

echo "</pre>";
?>








<!-- *************************************************************** -->
<?php
$hauteur = 5; // Height of the triangle / Hauteur du triangle

echo "<pre>"; // Preserve formatting / Préserver le formatage

// Loop through each row / Boucle pour chaque ligne
for ($i = 1; $i <= $hauteur; $i++) {

    // Calculate spaces before the left slash / Calculer les espaces avant le /
    $spaces = $hauteur - $i;

    // Print spaces / Afficher les espaces
    echo str_repeat("&nbsp;", $spaces);

    // Print left side of triangle / Afficher le côté gauche
    echo "/";

    // Print inner spaces / Afficher les espaces intérieurs
    if ($i == 1) {
        echo ""; // first row has no inner space / première ligne pas d'espace intérieur
    } else {
        echo str_repeat("&nbsp;", 2 * ($i - 1) - 1);
    }

    // Print right side / Afficher le côté droit
    echo "\\";

    // Move to next line / Passer à la ligne suivante
    echo "\n";
}

// Print the base / Afficher la base
echo str_repeat("/", 1) . str_repeat("_", 2 * $hauteur - 2) . "\\"; 

echo "</pre>";
?>

<br><br>

<!-- *************************************************************** -->
 <?php
$hauteur = 5; // Height of the triangle / Hauteur du triangle

echo "<pre>"; // Preserve formatting / Préserver le formatage

// Loop through each row / Boucle pour chaque ligne
for ($i = 1; $i <= $hauteur; $i++) {
    $spaces = $hauteur - $i;          // Spaces before / / Espaces avant le /
    $inner = 2 * ($i - 1);            // Spaces between / and \ / Espaces entre / et \

    // Print leading spaces / Affiche les espaces avant
    echo str_repeat("&nbsp;", $spaces);

    // Print left slash / Affiche le /
    echo "/";

    // Print inner spaces (except first row) / Espaces intérieurs sauf la première ligne
    if ($inner > 0) {
        echo str_repeat("&nbsp;", $inner);
    }

    // Print right slash / Affiche le \
    echo "\\";

    echo "\n"; // Move to next line / Passe à la ligne suivante
}

// Print the base / Affiche la base du triangle
$inner = 2 * ($hauteur - 1); // largeur intérieure finale
echo "/";
echo str_repeat("_", $inner);
echo "\\";

echo "</pre>";
?>
