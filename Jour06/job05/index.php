<?php
// Vérifier si le formulaire a été soumis avec un choix de style
if (isset($_GET['style'])) {
    $style = $_GET['style']; // Récupère le style choisi

    // Par sécurité, on force uniquement style1, style2 ou style3
    if ($style == "style1" || $style == "style2" || $style == "style3") {
        $cssFile = $style . ".css"; // ex: "style1.css"
    } else {
        $cssFile = "style1.css"; // style par défaut
    }
} else {
    $cssFile = "style1.css"; // style par défaut si rien choisi
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulaire avec styles</title>
    <!-- Inclusion dynamique du fichier CSS -->
    <link rel="stylesheet" href="<?= $cssFile ?>">
</head>
<body>

    <!-- Formulaire -->
    <form method="get">
        <label for="style"><u><b>Choisissez un style :</b></u></label>
        <select name="style" id="style">
            <option value="">--- Sélectionner votre style préféré ---</option>
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <input type="submit" value="Changer le style">
    </form>

</body>
</html>