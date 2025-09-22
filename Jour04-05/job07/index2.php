<?php
// Check if the form has sent values for 'largeur' and 'hauteur' via GET
// Vérifier si le formulaire a envoyé des valeurs pour 'largeur' et 'hauteur' via GET
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {

    // Store the width of the house from the form input
    // Stocker la largeur de la maison depuis le formulaire
    $largeur = (INT) $_GET['largeur'];

    // Store the height of the rectangle (body of the house) from the form input
    // Stocker la hauteur du rectangle (corps de la maison) depuis le formulaire
    $hauteur = (INT)$_GET['hauteur'];
        
     // Vérifier que les deux valeurs sont positives et non nulles
    if ($largeur > 0 && $hauteur > 0) {
        
        // Ensure width is even for proper triangle alignment
        // S'assurer que la largeur est paire pour que le triangle soit aligné avec le rectangle
        if ($largeur % 2 !== 0) {
            $largeur = $largeur + 1; // add 1 to make it even / ajouter 1 pour la rendre paire
        }



    // Use <pre> to preserve spaces and line breaks in HTML output
    // Utiliser <pre> pour préserver les espaces et retours à la ligne dans l'affichage HTML
    echo "<pre style='font-family: monospace;'>";

    // --- ROOF / TOIT ---

    // Loop to create each line of the roof (triangle)
    // Boucler pour créer chaque ligne du toit (triangle)
    for ($i = 0; $i < $largeur; $i += 2) {

        // Add spaces before the "/" to center the roof
        // Ajouter des espaces avant le "/" pour centrer le toit
        for ($e = 0; $e < ($largeur - $i) / 2; $e++) {
            echo "&nbsp;";
        }

        // Left side of the roof "/"
        // Côté gauche du toit "/"
        echo "/";

        // Add internal spaces between "/" and "\" to form the triangle
        // Ajouter des espaces internes entre "/" et "\" pour former le triangle
        for ($j = 0; $j < $i; $j++) {
            echo "_";
            // echo "-";
            // echo "&nbsp;";
        }

        // Right side of the roof "\"
        // Côté droit du toit "\"
        echo "\\";

        // Move to the next line
        // Passer à la ligne suivante
        echo "\n";
    }
    
    // --- WALLS / MURS ---

    // Loop to create the body of the house (rectangle)
    // Boucle pour créer le corps de la maison (rectangle)
    for ($h = 0; $h < $hauteur - 1; $h++) {

        // Left wall "|"
        // Mur gauche "|"
        echo "|";

        // Fill the inside of the rectangle with spaces
        // Remplir l'intérieur du rectangle avec des espaces
        for ($j = 0; $j < $largeur; $j++) {
            echo "&nbsp;"; // empty space inside
            // espace vide à l'intérieur
        }

        // Right wall "|"
        // Mur droit "|"
        echo "|";

        // Move to the next line
        // Passer à la ligne suivante
        echo "\n";
    }

    // --- FLOOR / SOL ---

    // Draw the bottom of the house (floor)
    // Dessiner le bas de la maison (sol)
    echo "|"; // Left side of the floor
    // Côté gauche du sol
   
    for ($j = 0; $j < $largeur; $j++) {
        echo "_"; // Floor horizontal line
        // Ligne horizontale du sol
    }


    echo "|"; // Right side of the floor
    // Côté droit du sol

    // Close the <pre> tag
    // Fermer la balise <pre>
    echo "</pre>";
}
}
?>

<!-- FORM / FORMULAIRE -->
 
<!-- HTML form to input (width=largeur) and (height=hauteur) of the house -->
<!-- Formulaire HTML pour entrer la largeur et la hauteur de la maison -->
<form method="get">
    Largeur : <input type="text" name="largeur"><br>
    Hauteur : <input type="text" name="hauteur"><br>
    <input type="submit" value="Construire la maison">
</form>
