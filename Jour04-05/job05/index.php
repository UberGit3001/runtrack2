<?php
// Vérification si le formulaire est soumis (si les champs existent dans $_POST)
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification des identifiants
    if ($username === "John" && $password === "Rambo") {
        echo "<p style='color: orangered;'> C’est pas ma guerre</p>". "<br>";
    } else {
        echo "<p style='color: blue;'>Votre pire cauchemar</p>" . "<br>";
    }
}
?>
<h2> Entrez <blockquote><quote>John</quote></blockquote> comme Username & <blockquote><quote>Rambo</quote></blockquote> comme password</h2>
<!-- Formulaire de connexion -->
<form method="post" action="">
    <input type="text" name="username" placeholder="Nom d'utilisateur"><br>
    <input type="password" name="password" placeholder="Mot de passe"><br>
    <input type="submit" value="Se connecter">
</form>
