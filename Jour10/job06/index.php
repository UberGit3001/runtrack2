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

// ==========================================================
// Requête pour Requête SQL pour compter le nombre étudiants
// ==========================================================

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur lors de la requête : " . $mysqli->error);
}

// =================================================
// Vérification du résultat si la requête a réussi
// =================================================
// Récupération des données
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nombre d'étudiants</title>
<style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        border: 1px solid #444;
        padding: 10px 20px;
        text-align: center;
    }
</style>
</head>
<body>
<h2>Nombre total d'étudiants</h2>
<table>
    <thead>
        <tr>
            <th>nb_etudiants</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row['nb_etudiants'] ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>

<?php

// ===========================================
// Libérer la mémoire et fermer la connexion
// ===========================================
$result->free();
$mysqli->close();
?>


