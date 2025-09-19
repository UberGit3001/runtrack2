<?php
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;

// Parcourir la chaîne caractère par caractère
// Loop through the string character by character
while (isset($str[$count])) {
    $count++;
}

// Afficher le résultat
// Display the result
echo "La chaîne contient $count caractères.";
echo "\nThe string contains $count characters.";
?>