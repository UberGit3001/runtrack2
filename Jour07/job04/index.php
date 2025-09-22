<?php
// Déclaration de la fonction calcule
function calcule($a, $operation, $b) {
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        // on vérifie division par zéro
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur : division par zéro";
        }
    } elseif ($operation == "%") {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur : modulo par zéro";
        }
    } else {
        return "Erreur : opération inconnue";
    }
}

// Exemple d'appel
$resultat = calcule(10, "+", 5);
echo $resultat; // affichera 15
?>
