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

// ==========================================================================
// Requête SQL : récupérer toutes les salles triées par capacité croissante
// ==========================================================================
$sql = "SELECT * FROM `salles` ORDER BY capacite ASC";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête : " . $mysqli->error);
}

// =================================================
// Vérification du résultat si la requête a réussi
// =================================================
// Récupération du résultat
// =================================================

$rows = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Salles triées par capacité croissante</title>
<style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        border: 1px solid #444;
        padding: 10px 15px;
        text-align: center;
    }
    th {
        background: #f0f0f0;
    }
</style>
</head>
<body>
<h2>Liste des salles triées par capacité croissante</h2>
<table>
    <thead>
        <tr>
            <?php foreach (array_keys($rows[0]) as $colName): ?>
                <th><?= htmlspecialchars($colName) ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <?php foreach ($row as $value): ?>
                    <td><?= htmlspecialchars($value) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
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
