<?php
// Boucle de 0 à 100 inclus
for ($i = 0; $i <= 100; $i++) {

    //  remplacer le numéro 42 par la chaine de charactère "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br />";
        continue; // on saute au suivant
    }

    // Si le nombre est entre 0 et 20, alors $i sera écrit en italique
    if ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br />";
    }
    // Si le nombre est entre 25 et 50, alors $i sera souligné
    elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br />";
    }
    // Sinon affichage normal
    else {
        echo $i . "<br />";
    }
}
?>
