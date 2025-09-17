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
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 60%;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: center;
        }

        th {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }

        tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        tbody tr:hover {
            background-color: #d1d8e0;
            transition: background 0.3s;
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
    <tbody>
        <?php foreach ($variables as $var) : ?>
            <tr>
                <td><?= htmlspecialchars($var['type']) ?></td>
                <td><?= htmlspecialchars($var['nom']) ?></td>
                <td>
                    <?php
                        // Pour afficher true/false comme texte
                        if (is_bool($var['valeur'])) {
                            echo $var['valeur'] ? 'true' : 'false';
                        } else {
                            echo htmlspecialchars($var['valeur']);
                        }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
</table>

</body>
</html>
