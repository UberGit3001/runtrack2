<?php
// Initialisation du compteur
$nb = 0;

// Parcours manuel du tableau $_GET
foreach ($_GET as $key => $value) {
    $nb = $nb + 1; // On incrémente pour chaque argument trouvé
}

// Affichage du résultat
echo "Le nombre d’argument GET envoyé est : " . $nb;
?>


