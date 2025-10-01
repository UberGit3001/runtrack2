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
// Requête SQL : somme des capacités totales des salles
// ==========================================================
$sql = "SELECT SUM(`capacite`) AS `capacite_totale` FROM `salles`";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur dans la requête : " . $mysqli->error);
}

// =================================================
// Vérification du résultat si la requête a réussi
// =================================================
// Récupération du résultat
// =================================================
$row = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Capacités totales des salles</title>
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
<h2>Capacités totales des salles</h2>
<table>
    <thead>
        <tr>
            <th>capacite_totale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row['capacite_totale'] ?></td>
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
