<?php
// Fonction gras : met en <b> les mots commençant par une majuscule
function gras($str) {
    $result = "";
    $word = "";
    $i = 0;

    while (isset($str[$i])) {
        $char = $str[$i];

        if ($char != " ") {
            $word .= $char;
        } else {
            // Mot terminé
            if (isset($word[0]) && $word[0] >= 'A' && $word[0] <= 'Z') {
                $result .= "<b>" . $word . "</b>";
            } else {
                $result .= $word;
            }
            $result .= " ";
            $word = "";
        }
        $i++;
    }

    // Gérer le dernier mot
    if ($word != "") {
        if ($word[0] >= 'A' && $word[0] <= 'Z') {
            $result .= "<b>" . $word . "</b>";
        } else {
            $result .= $word;
        }
    }

    return $result;
}

// Fonction césar : décale les lettres de $decalage (2 par défaut)
function cesar($str, $decalage = 2) {
    $result = "";
    $i = 0;

    while (isset($str[$i])) {
        $char = $str[$i];

        // Si c’est une lettre minuscule
        if ($char >= 'a' && $char <= 'z') {
            $pos = ord($char) - ord('a'); // position 0-25
            $newPos = ($pos + $decalage) % 26;
            $result .= chr($newPos + ord('a'));
        }
        // Si c’est une lettre majuscule
        elseif ($char >= 'A' && $char <= 'Z') {
            $pos = ord($char) - ord('A');
            $newPos = ($pos + $decalage) % 26;
            $result .= chr($newPos + ord('A'));
        }
        // Sinon, caractère non alphabétique
        else {
            $result .= $char;
        }

        $i++;
    }

    return $result;
}

?>

<!-- Formulaire -->
<form method="post">
    <input type="text" name="str" placeholder="Entrez votre texte">
    <select name="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Transformer</button>
</form>

<?php
// Traitement du formulaire
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction == "gras") {
        echo gras($str);
    } elseif ($fonction == "cesar") {
        echo cesar($str, 2); 
} else {
        echo $str; 
    }
}
?>