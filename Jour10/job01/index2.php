<?php
// connexion à la base des données et affichage des étudiants dans un tableau HTML

//========================================
// Connexion à la base de données
//========================================

$mysqli = new mysqli("localhost", "root", "", "jour09");

// =================================
// Vérification de la connexion
// =================================

if ($mysqli->connect_errno) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}

// =============================================
// Requête pour récupérer tous les étudiants
// =============================================

$sql = "SELECT * FROM etudiants";
$result = $mysqli->query($sql);

// ==========================
// Vérification du résultat
// ==========================

if (!$result) {
    die("Erreur dans la requête : " . $mysqli->error);
}

// =============================================================== 
// Récupérer toutes les données sous forme de tableau associatif
// ===============================================================

$rows = $result->fetch_all(MYSQLI_ASSOC);

// ================================
// Commencer le tableau HTML
// ================================

echo "<table border='1' cellpadding='8' cellspacing='0'>";

// ======================================================
// Générer l'en-tête avec les clés du premier élément
// ======================================================

if (!empty($rows)) {

    echo "<thead><tr>";

    foreach (array_keys($rows[0]) as $colName) {
        echo "<th>" . htmlspecialchars($colName) . "</th>";
    }

    echo "</tr></thead>";

}

// ==============================
// Générer le corps du tableau
// ==============================

echo "<tbody>";

foreach ($rows as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody>";

echo "</table>";

// ===========================================
// Libérer la mémoire et fermer la connexion
// ===========================================

$result->free();

$mysqli->close();
?>
