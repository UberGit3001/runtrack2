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
// Requête SQL : somme des superficies des étages
// ==========================================================
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
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
<title>Superficie Totale des Étages</title>
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
<h2>Superficie totale des étages</h2>
<table>
    <thead>
        <tr>
            <th>superficie_totale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $row['superficie_totale'] ?></td>
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
