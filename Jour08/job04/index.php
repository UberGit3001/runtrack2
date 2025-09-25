<?php
// Vérifier si bouton connexion cliqué
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = trim($_POST['prenom']);
    setcookie("prenom", htmlspecialchars($prenom), time() + 3600); // cookie valide 1h
    header("Location: " . $_SERVER['PHP_SELF']); // recharger proprement
    exit;
}

// Vérifier si bouton déconnexion cliqué
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600); // supprimer le cookie
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

// Vérifier si un prénom est déjà enregistré
$prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion avec cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        
        .success {
            color: rgba(44, 123, 66, 1);
            background-color: rgba(128, 244, 161, 0.5);
            border: 3px solid rgba(62, 220, 107, 1);
            border-radius: 8px;
            padding:  20px 20px;
            margin: 20px auto;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            color: #fff;
        }
        
        button[name="connexion"] {
            background: #007bff;
        }
        
        button[name="connexion"]:hover {
            background: #0056b3;
        }
        
        button[name="deco"] {
            background: #dc3545;
        }
        
        button[name="deco"]:hover {
            background: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php if (!$prenom): ?>
            <!-- Formulaire affiché si pas connecté -->
            <form method="post">
                <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
                <br>
                <button type="submit" name="connexion">Connexion</button>
            </form>
        <?php else: ?>
            <!-- Message si connecté -->
            <p class="success">Bonjour <strong><?= htmlspecialchars($prenom) ?></strong> !</p>
            <form method="post">
                <button type="submit" name="deco">Déconnexion</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
