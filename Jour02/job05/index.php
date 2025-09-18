<?php
// Fonction qui teste si un nombre est premier
function estPremier($n) {
    if ($n < 2) {
        return false;
    }
    // On vérifie seulement jusqu'à la racine carrée de n
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Boucle de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo $i . "<br />";
    }
}
?>
