<?php
// Boucle de 1 à 100
for ($i = 1; $i <= 100; $i++) {
    // Si multiple de 3 ET 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    }
    // Si multiple de 3 seulement
    elseif ($i % 3 == 0) {
        echo "Fizz<br />";
    }
    // Si multiple de 5 seulement
    elseif ($i % 5 == 0) {
        echo "Buzz<br />";
    }
    // Sinon, afficher le nombre
    else {
        echo $i . "<br />";
    }
}
?>
