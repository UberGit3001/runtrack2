<?php

// =======================================
// Connexion à la base de données jour09
// =======================================

$mysqli = new mysqli(hostname:"localhost", username:"root", password:"", database:"jour09");

// =================================
// Vérification de la connexion
// =================================

if ($mysqli->connect_errno) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}

// =====================================================================================================
// Requête pour récupérer touts les champs la table etudiants dont le prénom commence par la lettre T
// =====================================================================================================

$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
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


// =============
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<thead><tr>";
// Afficher les noms des colonnes - prenom, nom, naissance
foreach (array_keys($rows[0]) as $colName) {
    echo "<th>" . htmlspecialchars($colName) . "</th>";
}   

echo "</tr></thead>";

// ==============================
// Générer le corps du tableau
// ==============================

echo "<tbody>";

// =======================
// Affichage des données
// =======================

foreach ($rows as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody></table>";

// ===========================================
// Libérer la mémoire et fermer la connexion
// ===========================================

$result->free();

$mysqli->close();


?>