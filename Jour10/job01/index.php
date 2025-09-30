
<?php

// =======================================
// Connexion à la base de données jour09
// =======================================
$mysqli = new mysqli("localhost", "root", "", "jour09");

// =======================
// Vérifier la connexion
// =======================
if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}
// =============================================
// Requête pour récupérer tous les étudiants
// =============================================
$sql = "SELECT * FROM etudiants";
$result = $mysqli->query($sql);

// Vérifier s’il y a des résultats
if ($result && $result->num_rows > 0) {

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    
    // =============================================
    // Récupérer le nom des colonnes dans le thead
    // =============================================
    
    echo "<thead><tr>";

    while ($field = $result->fetch_field()) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }

    echo "</tr></thead>";

    // =============================================
    // Affichage des données dans le tbody
    // =============================================
    
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }

        echo "</tr>";

    }
    
    echo "</tbody>";

    echo "</table>";
} else {
    echo "Aucun étudiant trouvé.";
}

// =====================
// Fermer la connexion
// =====================
$mysqli->close();
?>
