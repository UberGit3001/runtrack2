<?php
session_start(); // juste pour le drapeau, le compteur reste dans le cookie

// 1. Vérifier si le cookie existe déjà
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    $nbvisites = (int)$_COOKIE['nbvisites'];
}

// 2. Vérifier si reset demandé
if (isset($_POST['reset'])) {
    $nbvisites = 0;
    setcookie("nbvisites", $nbvisites, time() + 3600);
    $_SESSION['just_reset'] = true; // drapeau qui dit "ne pas incrémenter tout de suite"
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

// 3. Incrémenter seulement si ce n’est pas un reset
if (!isset($_SESSION['just_reset'])) {
    $nbvisites++;
}

// 4. Nettoyer le drapeau pour les prochaines visites
unset($_SESSION['just_reset']);

// 5. Mettre à jour le cookie
setcookie("nbvisites", $nbvisites, time() + 3600);
?>
<p>Nombre de visites  (cookies): <?php echo $nbvisites; ?></p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

<?php
// debug : voir le contenu du cookie
var_dump($_COOKIE);
?>
