<?php
// Vérifier si le champ "nombre" est bien envoyé dans l'URL
if (isset($_GET['nombre'])) {
    $n = $_GET['nombre'];

    // Vérification de la parité avec le modulo %
    if ($n % 2 === 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}
?>

<!-- Formulaire GET -->
<form method="get" action="">
    <input type="text" name="nombre" placeholder="Entrez un nombre">
    <input type="submit" value="Vérifier">
</form>
