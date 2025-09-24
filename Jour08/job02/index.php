<?php
// 1. Vérifier si le cookie existe déjà
if (!isset($_COOKIE['nbvisites'])) {
    // Si le cookie n'existe pas encore, on l'initialise à 0
    $nbvisites = 0;
} else {
    // Sinon, on récupère sa valeur
    $nbvisites = $_COOKIE['nbvisites'];
}

// 2. Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    // Remettre le compteur à zéro
    $nbvisites = 0;
} else {
    // Sinon, on incrémente (visite normale)
    $nbvisites++;
}

// 3. Mettre à jour le cookie avec la nouvelle valeur
// durée de vie = 1 heure (3600 secondes)
setcookie("nbvisites", $nbvisites, time() + 3600);

?>
<p>Nombre de visites (cookie) : <?php echo $nbvisites; ?></p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
