<?php

// -------------------------------
// 1. Définition des variables
// -------------------------------

$maBoolean = true;           // variable booléenne
$monEntier = 42;             // variable entière
$maChaine = "LaPlateforme";  // variable chaîne de caractères
$monFloat = 3.14;            // variable flottante

// tableau associatif pour organiser les variables
$variables = [
    ["type" => gettype($maBoolean), "nom" => "maBoolean", "valeur" => $maBoolean],
    ["type" => gettype($monEntier), "nom" => "monEntier", "valeur" => $monEntier],
    ["type" => gettype($maChaine), "nom" => "maChaine", "valeur" => $maChaine],
    ["type" => gettype($monFloat), "nom" => "monFloat", "valeur" => $monFloat]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job03 - Variables PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tableau des variables PHP</h2>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    
</table>

</body>
</html>
