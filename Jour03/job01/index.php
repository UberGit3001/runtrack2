
<!-- ==============================  
    boucle foreach
================================ -->

<?php
echo "<u><h3>Avec une boucle foreach</h3></u>";
// Création du tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau avec foreach
foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        // Si le reste de la division par 2 est 0 alors le nombre est pair
        echo "<span style = 'padding: 20; text-align: left; color:#D4F;'>$number</span>" . " <span  style = 'padding: 20; text-align: left; color:#D8F;'>est paire</span> <br />";
        
        
    } else {
        // Sinon le nombre est impair
        echo "<span style = 'padding: 20; text-align: left; color:#333;'>$number</span>" . " <span  style = 'padding: 20; text-align: left; color:#456;'>est impaire</span> <br />";
    }
}
?>

<!-- ==============================  
    Fin de la boucle foreach
================================ -->

<br />
<hr />
<br />

<!-- ==============================  
    boucle for & switch
================================ -->
<?php
echo "<u><h3>Avec une boucle for et un switch</h3></u>";
// Création du tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Boucle for classique
for ($i = 0; $i < count($numbers); $i++) {
    $number = $numbers[$i];

    // On teste avec un switch sur la parité
    switch ($number % 2) {
        case 0: // pair
            echo "<span style='padding:20px; text-align:left; color:#D4F;'>$number</span>"
            . " <span style='padding:20px; text-align:left; color:#D8F;'>est paire</span><br />";
            break;

        default: // impair
            echo "<span style='padding:20px; text-align:left; color:#333;'>$number</span>"
            . " <span style='padding:20px; text-align:left; color:#456;'>est impaire</span><br />";
            break;
    }
}
?>
<!-- ==============================  
    Fin de la boucle for & switch
================================ -->

<br />
<hr />
<br />

<!-- ==============================  
    la boucle while
================================ -->
<?php
echo "<u><h3>Avec une boucle while</h3></u>";

// Création du tableau
$numbers = [200, 204, 173, 98, 171, 404, 459];

$i = 0;
while ($i < count($numbers)) {
    $number = $numbers[$i];

    if ($number % 2 === 0) {
        echo "<span style='padding:20px; text-align:left; color:#D4F;'>$number</span>"
        . " <span style='padding:20px; text-align:left; color:#D8F;'>est paire</span><br />";
    } else {
        echo "<span style='padding:20px; text-align:left; color:#333;'>$number</span>"
        . " <span style='padding:20px; text-align:left; color:#456;'>est impaire</span><br />";
    }

    $i++; // Incrémentation obligatoire sinon boucle infinie
}
?> 
