<?php
// Boucle de 0 à 1337 inclus
for ($i = 0; $i <= 1337; $i++) {
    // On vérifie si le nombre est dans la liste interdite
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue; // on passe au suivant sans afficher
    }

    echo $i . "<br />";
}
?>
