<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$reversed = '';

// Trouver la longueur de la chaîne 
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Parcourir la chaîne à l'envers
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

echo $reversed;
?>