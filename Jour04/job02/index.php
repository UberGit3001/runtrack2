<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Argument</th><th>Valeur</th></tr>";

// On parcourt $_GET sans fonction système
foreach ($_GET as $argument => $valeur) {
    echo "<tr>";
    echo "<td>" . $argument . "</td>";
    echo "<td>" . $valeur . "</td>";
    echo "</tr>";

    // clearstatcache(); //je sais que c'est une fonction système mais je voulais l'inclure ici pour effacer le cache à chaque itération et reprendre à zéro
    
}
echo "</table>";
?>
<form method="get" action="">
    <input type="text" name="prenom" value="" placeholder="Votre prénom"><br>
    <input type="text" name="nom" value="" placeholder="Votre nom"><br>
    <input type="number" name="age" value="" placeholder="Votre âge"><br>
    <input type="submit" value="Envoyer">
</form>
