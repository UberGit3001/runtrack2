<?php
// morpion-simple.php — version facile à lire pour débutant

// par défaut, grille vide et X commence
$board = ['-', '-', '-', '-', '-', '-', '-', '-', '-'];
$next = 'X';
$message = '';

// récupérer données POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // reset
    if (isset($_POST['reset'])) {
        $board = ['-', '-', '-', '-', '-', '-', '-', '-', '-'];
        $next = 'X';
    } else {
        if (isset($_POST['board'])) {
            $board = explode(',', $_POST['board']);
        }
        if (isset($_POST['next'])) {
            $next = $_POST['next'];
        }

        // si clic sur une case
        if (isset($_POST['move'])) {
            $idx = (int)$_POST['move'];
            if ($board[$idx] === '-') {
                $board[$idx] = $next;

                // vérifier les combinaisons gagnantes
                $wins = [
                    [0,1,2],[3,4,5],[6,7,8], // lignes
                    [0,3,6],[1,4,7],[2,5,8], // colonnes
                    [0,4,8],[2,4,6]          // diagonales
                ];
                foreach ($wins as $w) {
                    if ($board[$w[0]] !== '-' &&
                        $board[$w[0]] === $board[$w[1]] &&
                        $board[$w[1]] === $board[$w[2]]) {
                        $message = $board[$w[0]] . " a gagné !";
                        $board = ['-', '-', '-', '-', '-', '-', '-', '-', '-'];
                        $next = 'X';
                    }
                }

                // match nul
                if ($message === '' && !in_array('-', $board)) {
                    $message = "Match nul";
                    $board = ['-', '-', '-', '-', '-', '-', '-', '-', '-'];
                    $next = 'X';
                }

                // si pas fini, changer joueur
                if ($message === '') {
                    $next = ($next === 'X') ? 'O' : 'X';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Morpion simple</title>
<style>

    body { 
        font-family: Arial, sans-serif; 
        text-align: center; 
        margin-top: 40px; 
        background: #f9f9f9;
    }

    table {
        margin: auto;
        border-collapse: collapse;
    }

    td {
        width: 80px;
        height: 80px;
        text-align: center;
        vertical-align: middle;
    }

    /* Bordures internes seulement */
    td {
        border: none;
    }
    tr td:not(:last-child) {
        border-right: 5px solid #acf4e6;
    }
    tr:not(:last-child) td {
        border-bottom: 5px solid #acf4e6;
    }

    /* Boutons vides */
    button {
        padding: 10px;
        width: 400PX;
        height: 100px;
        font-size: 28px;
        border-radius: 25px;
        border: none;
        /* border: 2px solid orangered; */
        background: transparent;
        cursor: pointer;
    }
    button:hover {
        background: #ececec;
    }

    p>.bouton-reset {
        border: 3px solid orangered;
        color: orangered;
    }
    p>.bouton-reset:hover {
        /* border: 3px solid orangered; */
        border: none;
        color: white;
        background-color: orangered;
    }
    /* Symboles .X */
    .X  {
        color: #18bc9c;   /* rouge vif */
        font-weight: bold;
        font-size: 32px;
    }
    
    /* Symboles .O */
    .O {
        color: #457b9d;   /* bleu profond */
        font-weight: bold;
        font-size: 32px;
    }

    .msg {
        margin-bottom: 15px; 
        font-weight: bold; 
        font-size: 18px;
        color: #444;
    }

    
.msg .player {
    font-weight: bold;
    font-size: 20px;
}

/* .msg .winner {
    font-weight: bold;
    font-size: 20px;
} */

/* Encadrer le gagnant */
.msg.winner-box {
    display: inline-block;
    border: 3px solid #18bc9c; /* couleur neutre par défaut, on peut changer selon X ou O */
    padding: 10px 20px;
    border-radius: 12px;
    background: #f0fdf9; /* fond léger assorti */
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

.msg .X {
    color: #18bc9c;  /* la même couleur que ton X sur la grille */
}

.msg .O {
    color: #457b9d;  /* la même couleur que ton O sur la grille */
}

</style>
</head>
<body>
<h2>Jeu du Morpion</h2>
<?php if ($message !== ''): ?>
    <?php if (strpos($message, 'a gagné') !== false): ?>
    <?php
        // extraire le gagnant
        //$winner = $board[0]; // par défaut
        $winner = 'X'; // par défaut
        if (preg_match('/^(X|O) a gagné/', $message, $matches)) {
            $winner = $matches[1];
        }
        $winnerColor = ($winner === 'X') ? '#18bc9c' : '#457b9d';
        $winnerBg = ($winner === 'X') ? '#f0fdf9' : '#e6f0fa';
    ?>

    <div class="msg winner-box" style="border-color: <?= $winnerColor ?>; background: <?= $winnerBg ?>;">
        <span class="<?= $winner ?>"><?= htmlspecialchars($winner) ?></span> a gagné !

        <!-- <span class="winner <?= $winner ?>"><?= htmlspecialchars($winner) ?></span> a gagné ! -->
    </div>

    <?php else: ?>
    <div class="msg"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <!-- =================================================== -->

<?php else: ?>
    <div class="msg winner-box">
        Joueur courant : 
        <span class="player <?= $next ?>"><?= htmlspecialchars($next) ?></span>
    </div>
<?php endif; ?>

<form method="post">
    <input type="hidden" name="board" value="<?= implode(',', $board) ?>">
    <input type="hidden" name="next" value="<?= $next ?>">

    <table>
        <tr>
            <td><?php echo ($board[0] === '-') ? '<button type="submit" name="move" value="0">-</button>' 
            : "<span class=\"{$board[0]}\">{$board[0]}</span>"; ?></td>    

            <td><?php echo ($board[1] === '-') ? '<button type="submit" name="move" value="1">-</button>'  : "<span class=\"{$board[1]}\">{$board[1]}</span>"; ?></td>

            <td><?php echo ($board[2] === '-') ? '<button type="submit" name="move" value="2">-</button>'  : "<span class=\"{$board[2]}\">{$board[2]}</span>"; ?></td>
        </tr>
        <tr>
            <td><?php echo ($board[3] === '-') ? '<button type="submit" name="move" value="3">-</button>'  : "<span class=\"{$board[3]}\">{$board[3]}</span>"; ?></td>

            <td><?php echo ($board[4] === '-') ? '<button type="submit" name="move" value="4">-</button>'  : "<span class=\"{$board[4]}\">{$board[4]}</span>"; ?></td>

            <td><?php echo ($board[5] === '-') ? '<button type="submit" name="move" value="5">-</button>'  : "<span class=\"{$board[5]}\">{$board[5]}</span>"; ?></td>
        </tr>
        <tr>
            <td><?php echo ($board[6] === '-') ? '<button type="submit" name="move" value="6">-</button>'  : "<span class=\"{$board[6]}\">{$board[6]}</span>"; ?></td>

            <td><?php echo ($board[7] === '-') ? '<button type="submit" name="move" value="7">-</button>'  : "<span class=\"{$board[7]}\">{$board[7]}</span>"; ?></td>

            <td><?php echo ($board[8] === '-') ? '<button type="submit" name="move" value="8">-</button>'  : "<span class=\"{$board[8]}\">{$board[8]}</span>"; ?></td>
        </tr>
    </table>

    <p><button class="bouton-reset" type="submit" name="reset">Réinitialiser la partie</button></p>
</form>
</body>
</html>
