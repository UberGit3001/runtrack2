<?php
// Boucle de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Si le nombre est 42, on met en gras et souligné
    if ($i == 42) {
        echo "<b><u>$i</u></b><br />";
        // var_dump($i);
    } else {
        echo $i . "<br />";

    }

}
?>
