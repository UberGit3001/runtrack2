<?php
// Vérifie si les deux variables largeur et hauteur ont été envoyées via le formulaire (méthode GET).
// On a le droit d'utiliser isset (c'est précisé dans ton énoncé).
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {

    // On récupère les valeurs envoyées dans l'URL par le formulaire
    // Exemple : ?largeur=10&hauteur=5

    $largeur = $_GET['largeur'];   // Largeur de la maison (nombre de colonnes d'étoiles)
    $hauteur = $_GET['hauteur'];   // Hauteur de la base rectangulaire (nombre de lignes sous le toit)

    // Balise <pre> pour conserver les espaces et retours à la ligne dans l'affichage HTML
    // Sans <pre>, les espaces multiples ne seraient pas visibles et le dessin serait déformé.

    echo "<pre>";

    // --------------------------
    // CONSTRUCTION DU TOIT
    // --------------------------

    // On utilise une boucle pour tracer le triangle du toit
    // La boucle démarre à 0 étoile et augmente de 2 à chaque fois (1, 3, 5, ...)
    // Ce système permet de former un triangle isocèle centré

    for ($i = 0; $i <= $largeur+1; $i += 2) {

        // Ajouter des espaces pour centrer les étoiles
        // Exemple : si largeur = 10, et $i = 4 alors (10 - 4) / 2 = 3 espaces avant d'afficher les étoiles
        for ($e = 0; $e < ($largeur - $i) / 2; $e++) {
            echo " ";
        }

        // Ajout d'étoiles
        // Afficher $i étoiles consécutives, pour créer la ligne du triangle
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }

        // Retour à la ligne pour passer à la ligne suivante du toit
        echo "\n";
    }

    // --------------------------
    // CONSTRUCTION DU CORPS
    // --------------------------

    // Une boucle pour répéter autant de fois que la hauteur demandée
    for ($h = 0; $h < $hauteur; $h++) {

        // Pour chaque ligne du rectangle : on affiche $largeur étoiles
        for ($j = 0; $j < $largeur+1; $j++) {
            echo "*";
        }

        // Retour à la ligne après chaque ligne du rectangle
        echo "\n";
    }

    // Fermeture de la balise <pre>
    echo "</pre>";
}
?>

<!-- Formulaire HTML -->
<!-- Il permet de saisir les valeurs largeur et hauteur -->
<form method="get" action="">
    Largeur : <input type="text" name="largeur"><br>
    Hauteur : <input type="text" name="hauteur"><br>
    <input type="submit" value="Construire la maison">
</form>
