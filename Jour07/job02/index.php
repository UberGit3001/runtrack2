<?php

// Déclaration de la fonction bonjour
function bonjour($jour){
    if($jour===true) {
    echo "Bonjour $jour !";
    }else{
    echo "Bonsoir";
    }
}

// Exemple d'utilisation :
$matin = true;
$soir = false;

bonjour($matin);  // Affiche : Bonjour
echo "<br>";
bonjour($soir);   // Affiche : Bonsoir


?>