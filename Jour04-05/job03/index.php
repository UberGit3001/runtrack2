<?php
// Initialisation du compteur
$nb = 0;

// On parcourt $_POST sans utiliser de fonction système
foreach ($_POST as $cle => $valeur) {
    $nb = $nb + 1; // Incrémentation manuelle
}

// Affichage du résultat
echo "Le nombre d’argument POST envoyé est : " . $nb;
?>


<form method="post" action="">
    <input type="text" name="prenom" value="" placeholder="Votre prénom"><br>
    <input type="text" name="nom" value="" placeholder="Votre nom"><br>
    <input type="number" name="age" value="" placeholder="Votre âge"><br>
    <input type="submit" value="Envoyer">   
</form>
