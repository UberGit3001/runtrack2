<?php
// Initialisation du compteur
$nb = 0;

// Parcours manuel du tableau $_GET
foreach ($_GET as $key => $value) {
    $nb = $nb + 1; // On incrémente pour chaque argument trouvé
}

// Affichage du résultat
echo "Le nombre d’argument GET envoyé est : " . $nb;
?>

<form method="get" action="">
    <input type="text" name="prenom" placeholder="Votre prénom"><br>
    <input type="text" name="nom" placeholder="Votre nom"><br>
    <input type="text" name="age" placeholder="Votre âge"><br>
    <input type="submit" value="Envoyer">
</form>


