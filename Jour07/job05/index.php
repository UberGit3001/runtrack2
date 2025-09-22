<?php

// function occurences($string, $char) {
//     $count = 0;
//     $length = strlen($string); // obtenir la longueur de la chaîne mais fonction systeme interdite
    
//     for ($i = 0; $i < $length; $i++) {
//         if ($string[$i] === $char) {
//             $count++;
//         }
//     }
    
//     return $count;
// }
 ?>

<?php
// Déclaration de la fonction occurrences
function occurrences($str, $char) {
    $count = 0;         // compteur d'occurrences
    $i = 0;             // index pour parcourir la chaîne

    // Parcours de la chaîne tant qu'il y a un caractère
    while (isset($str[$i])) {  
        if ($str[$i] == $char) {
            $count++;
        }
        $i++;
    }

    return $count;
}

// Exemple d'appel
echo occurrences("Bonjour", "o"); // affichera 2
?>
