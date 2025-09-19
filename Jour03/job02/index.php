<?php
echo "<u><h1>Exercice Jour03 / job02</h1></u>";
echo "<u><h2>Afficher une chaîne de caractères en supprimant les caractères d’indice impairs (exemple : 0123456789 devient après 02468)</h2></u> <br />";


// Déclaration de la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
echo "<p>$str</p> . <br />";


// Initialisation du compteur
$i = 0;

// Tant qu’on n’arrive pas au caractère vide (fin de chaîne)
while (isset($str[$i])) {
    // Si l’indice est pair alors on affiche le caractère
    if ($i % 2 === 0) {
        echo $str[$i];
    }
    $i++; // On passe au caractère suivant
}
?>