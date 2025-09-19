<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = '';
$allVowels = 'aeiouyAEIOUY';

// Calcul de la longueur de $str sans utiliser strlen()
// Calculate length of $str without using strlen()
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Calcul de la longueur de $allVowels sans utiliser strlen()
// Calculate length of $allVowels without using strlen()
$vowelsLength = 0;
while (isset($allVowels[$vowelsLength])) {
    $vowelsLength++;
}

// Parcourir chaque caractère de $str
// Loop through each character of $str
for ($i = 0; $i < $length; $i++) {
    $char = $str[$i];
    $isVowel = false;
    
    // Vérifier si $char est une voyelle en le comparant avec chaque caractère de $allVowels
    // Check if $char is a vowel by comparing it with each character of $allVowels
    for ($j = 0; $j < $vowelsLength; $j++) {
        if ($char === $allVowels[$j]) {
            $isVowel = true;
            break;
        }
    }
    
    // Si c'est une voyelle, l'ajouter à la variable $vowels
    // If it's a vowel, add it to the $vowels variable
    if ($isVowel) {
        $vowels .= $char;
    }
}

// Afficher le résultat final contenant toutes les voyelles
// Display the final result containing all vowels
echo $vowels;

?>