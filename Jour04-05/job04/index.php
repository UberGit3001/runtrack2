<?php
// On commence le tableau
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Argument</th><th>Valeur</th></tr>";

// Parcours de $_POST sans fonction système
foreach ($_POST as $argument => $valeur) {
    echo "<tr>";
    echo "<td>" . $argument . "</td>";
    echo "<td>" . $valeur . "</td>";
    echo "</tr>";
}

// Fermeture du tableau
echo "</table>";
?>
<form method="post" action="">
    <input type="text" name="prenom" value="" placeholder="Votre prénom"><br>
    <input type="text" name="nom" value="" placeholder="Votre nom"><br>
    <input type="number" name="age" value="" placeholder="Votre âge"><br>
    <input type="submit" value="Envoyer">
</form>