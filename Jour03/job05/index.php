<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes" => 0, "voyelles" => 0);

// Définition des voyelles (minuscules et majuscules)
$vowels = "aeiouyAEIOUY";

// Calcul de la longueur de la chaîne de voyelles
$vowelsLength = 0;
while (isset($vowels[$vowelsLength])) {
    $vowelsLength++;
}

// Parcours de la chaîne principale
$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    $isLetter = false;
    $isVowel = false;
    
    // Vérifier si le caractère est une lettre
    if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
        $isLetter = true;
        
        // Vérifier si c'est une voyelle
        $j = 0;
        while ($j < $vowelsLength) {
            if ($char === $vowels[$j]) {
                $isVowel = true;
                break;
            }
            $j++;
        }
    }
    
    // Incrémenter les compteurs appropriés
    if ($isLetter) {
        if ($isVowel) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    
    $i++;
}

// Affichage du résultat dans un tableau HTML
echo "<table border='1'>";
echo "<tr><th>Type</th><th>Nombre</th></tr>";
echo "<tr><td>Voyelles</td><td>" . $dic["voyelles"] . "</td></tr>";
echo "<tr><td>Consonnes</td><td>" . $dic["consonnes"] . "</td></tr>";
echo "</table>";
?>