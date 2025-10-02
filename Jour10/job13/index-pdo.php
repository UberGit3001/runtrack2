<?php
// =======================================
// Connexion à la base de données jour09
// =======================================
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Active les erreurs
} catch (PDOException $e) {
    die("Échec de la connexion : " . $e->getMessage());
}

// ==================================================================================
// Requête SQL : récupérer les noms des salles et des étages associés
// ==================================================================================
$sql = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
        FROM salles
        JOIN etage ON salles.id_etage = etage.id";

$stmt = $pdo->query($sql); // Exécution directe
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupération sous forme associative
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Noms des salles et des étages associés</title>
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
<h2>Les noms des salles et des étages associés</h2>
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
// Pas besoin de libérer avec PDO (garbage collector le fait)
// Fermeture explicite de la connexion (optionnelle)
// ===========================================
$pdo = null;
?>
