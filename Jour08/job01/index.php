
<?php
// 1. Démarrer la session
// -----------------------
// Une session permet de stocker des données côté serveur
// Ici on garde le compteur de visites dans $_SESSION
session_start();


// 2. Initialiser la variable de session "nbvisites" si elle n'existe pas encore
// ----------------------------------------------------------------------------
// Au premier chargement de la page, $_SESSION['nbvisites'] n'existe pas.
// On la crée et on la met à zéro.
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}


// 3. Vérifier si le bouton "Reset" a été cliqué
// ---------------------------------------------
// Quand on clique sur le bouton du formulaire, $_POST['reset'] est défini.
// réinitialiser le compteur à 0
// poser un "drapeau" (just_reset = true) pour indiquer qu'un reset vient d'être fait
// rediriger la page en GET (header + exit) pour éviter que le formulaire soit renvoyé en POST à chaque F5
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;        // remettre le compteur à zéro
    $_SESSION['just_reset'] = true;    // créer un marqueur temporaire
    header("Location: " . $_SERVER['PHP_SELF']); // recharger la page proprement
    exit; // arrêter l'exécution après redirection
}


// 4. Incrémenter le compteur si ce n’est pas un reset
// ---------------------------------------------------
// Si "just_reset" N'EST PAS défini, c’est une visite normale on incrémente.
// Si "just_reset" est défini, cela veut dire qu’on sort juste d’un reset
//  dans ce cas, on ne veut pas incrémenter immédiatement.
if (!isset($_SESSION['just_reset'])) {
    $_SESSION['nbvisites']++;
}


// 5. Supprimer le drapeau "just_reset" (nettoyage)
// ------------------------------------------------
// Comme il a servi une seule fois, on le retire de la session.
// Ainsi, lors du prochain rechargement normal, le compteur reprendra l'incrémentation.
unset($_SESSION['just_reset']);
?>
<p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>


