<?php


// =======================================
// Connexion à la base de données jour09
// =======================================
$mysqli = new mysqli("localhost", "root", "", "jour09");

// =================================
// Vérification de la connexion
// =================================

if ($mysqli->connect_errno) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}

// ======================================================================
// Requête pour récupérer les champs nom et capacite de la table salles
// ======================================================================

$sql = "SELECT nom, capacite FROM salles";
$result = $mysqli->query($sql);


// =================================================
// Vérification du résultat si la requête a réussi
// =================================================

if (!$result) {
    die("Erreur dans la requête : " . $mysqli->error);
}


// =============================================================== 
// Récupérer les résultats sous forme de tableau associatif
// ===============================================================

$rows = $result->fetch_all(MYSQLI_ASSOC);



// Générer le tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<thead><tr>";

// Afficher les noms des colonnes (nom, capacite)
foreach (array_keys($rows[0]) as $colName) {
    echo "<th>" . htmlspecialchars($colName) . "</th>";
}

echo "</tr></thead><tbody>";

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