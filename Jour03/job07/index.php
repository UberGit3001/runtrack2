<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$shifted = '';

// Trouver la longueur de la chaîne 
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Construire la nouvelle chaîne décalée
for ($i = 1; $i < $length; $i++) {
    $shifted .= $str[$i];
}
$shifted .= $str[0];

echo $shifted;
?>