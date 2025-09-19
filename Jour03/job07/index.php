<?php
// On commence par créer une variable avec notre texte
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// On crée une variable vide qui va accueillir notre résultat final
$shifted = '';

// Étape 1: Calculer la longueur de la chaîne sans utiliser strlen()
$length = 0; // On commence à compter à zéro

// On utilise une boucle while pour compter les caractères un par un
// isset() vérifie si un caractère existe à la position donnée
while (isset($str[$length])) {
    $length++; //On ajoute et incrémente par 1 à length à chaque fois qu'on trouve un caractère
}
// À la fin de cette boucle, $length contient le nombre total de caractères

// Étape 2: Créer la nouvelle chaîne décalée
// On utilise une boucle for qui commence au DEUXIÈME caractère (index 1)
// et qui va jusqu'au dernier caractère (index $length-1)
for ($i = 1; $i < $length; $i++) {
    // On ajoute chaque caractère à notre nouvelle chaîne
    // Le premier caractère ajouté sera donc le deuxième de l'original
    $shifted .= $str[$i];
}
// Étape 3: Ajouter le PREMIER caractère de l'original à la FIN du résultat
$shifted .= $str[0];

// On affiche le résultat final
echo $shifted;

?>