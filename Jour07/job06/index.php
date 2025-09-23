<?php
// Fonction leetSpeak
function leetSpeak($str) {
    $result = "";
    $i = 0;

    // On parcourt la chaîne caractère par caractère
    while (isset($str[$i])) {
        $char = $str[$i];

        // On teste les lettres en majuscule et minuscule
        if ($char == "A" || $char == "a") {
            $result .= "4";
        } elseif ($char == "B" || $char == "b") {
            $result .= "8";
        } elseif ($char == "E" || $char == "e") {
            $result .= "3";
        } elseif ($char == "G" || $char == "g") {
            $result .= "6";
        } elseif ($char == "L" || $char == "l") {
            $result .= "1";
        } elseif ($char == "S" || $char == "s") {
            $result .= "5";
        } elseif ($char == "T" || $char == "t") {
            $result .= "7";
        } else {
            // Si pas concerné, on garde le caractère original
            $result .= $char;
        }

        $i++;
    }

    return $result;
}

// Exemple d'appel
echo leetSpeak("Salut Les Gars"); 
// Résultat attendu : "541u7 135 64r5"
?>
