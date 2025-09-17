<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombres de 0 à 1337</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.5;
        }
        .special {
            color: red;
            font-weight: bold;
            text-decoration: underline;
            text-align: center;
            display: block;
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<b><u><span class='special'>$i</span></u></b><br />";
        // var_dump($i);
    } else {
        echo $i . "<br />";
    }
}
?>

</body>
</html>
