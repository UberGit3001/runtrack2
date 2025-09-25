<?php
session_start(); // démarrer la session

// Initialiser le tableau de prénoms si pas encore créé
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// cliquer sur Reset pour vider la liste
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = []; // remettre à zéro
    header("Location: " . $_SERVER['PHP_SELF']); // recharger proprement
    exit;
}

// Si un prénom est soumis, l’ajouter à la liste
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $prenom = trim($_POST['prenom']); // supprimer espaces inutiles
    $_SESSION['prenoms'][] = htmlspecialchars($prenom); // sécuriser l’affichage
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>Job03 - Formulaire prénoms</title>
    
    <style>
        body {
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f4f7f9;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
            /* min-height: 100vh; */
            margin: 0;
            padding: 40px;
            gap: 2rem;
        }

        .container {
        width: 80%;
        /* height: auto; */
        background: #fff;
        padding: 20px 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        /* width: 320px; */
        }
        
        h2, h3 {
        text-align: center;
        color: #333;
        margin-bottom: 2.5rem;
        }

        form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
        }

        input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s;
        }

        input[type="text"]:focus {
        border-color: #007bff;
        outline: none;
        }
        
        button {
        padding: 10px;
        font-size: 14px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
        }

        button[name="submit"]:hover {
        background: #0056b3;
        color: #fff;
        }
        

        button[name="reset"] {
        background: #dc3545;
        color: #fff;
        }

        button[name="reset"]:hover {
        background: #a71d2a;
        }

        ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 2rem;

        list-style:inside;
        /* list-style:circle; */
        padding: 0;
        margin: 0;
        margin-top: 20px;
        }

        ul li {
        background: #f1f1f1;
        margin: 6px 0;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 14px;
        color: #333;
        }
    </style>

</head>
<body>

    <div class="container container-A">
        <h2>Ajouter un prénom</h2>
        <form method="post" action="">
            <input type="text" name="prenom" placeholder="Entrez un prénom">
            <button type="submit" name="submit">Ajouter</button>
            <button type="submit" name="reset">Reset</button>
        </form>

    </div>
    <div class="container container-B">
        <h3>Liste des prénoms ajoutés :</h3>
    
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $p): ?>
                <li><?= $p ?></li>
            <?php endforeach; ?>
        </ul>

    </div>


</body>
</html>
