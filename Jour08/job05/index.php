<?php
// morpion.php — pas de session, tout est envoyé via POST / hidden inputs

// helper : vérifie un gagnant (retourne 'X' ou 'O' ou null)
function check_winner(string $b) {
    $wins = [
        [0,1,2], [3,4,5], [6,7,8], // lignes
        [0,3,6], [1,4,7], [2,5,8], // colonnes
        [0,4,8], [2,4,6]           // diag
    ];
    foreach ($wins as $w) {
        if ($b[$w[0]] !== '-' && $b[$w[0]] === $b[$w[1]] && $b[$w[1]] === $b[$w[2]]) {
            return $b[$w[0]];
        }
    }
    return null;
}

// état par défaut : grille vide, X commence
$board = '---------'; // 9 caractères, '-' = case vide
$next = 'X';
$message = '';

// récupérer état envoyé (si présent)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // si reset demandé (bouton)
    if (isset($_POST['reset'])) {
        $board = '---------';
        $next = 'X';
        $message = '';
    } else {
        // récupérer board et next envoyés (sinon valeurs par défaut)
        if (isset($_POST['board'])) {
            $b = (string)$_POST['board'];
            if (strlen($b) === 9) $board = $b;
        }
        if (isset($_POST['next'])) {
            $n = (string)$_POST['next'];
            if ($n === 'X' || $n === 'O') $next = $n;
        }

        // si bouton de case cliqué : 'move' contient l'indice (0..8)
        if (isset($_POST['move'])) {
            $idx = (int)$_POST['move'];
            // sécurité : ne pas jouer sur une case déjà prise
            if ($idx >= 0 && $idx <= 8 && $board[$idx] === '-') {
                // placer le symbole
                $board[$idx] = $next;
                // vérifier gagnant
                $winner = check_winner($board);
                if ($winner !== null) {
                    // afficher message puis réinitialiser la partie
                    $message = htmlspecialchars($winner) . ' a gagné !';
                    $board = '---------';
                    $next = 'X';
                } else {
                    // aucun gagnant : vérifier match nul
                    if (strpos($board, '-') === false) {
                        $message = 'Match nul.';
                        $board = '---------';
                        $next = 'X';
                    } else {
                        // continuer la partie : changer de joueur
                        $next = ($next === 'X') ? 'O' : 'X';
                    }
                }
            } // si case déjà jouée on ignore (aucun changement)
        }
    }
}

// affichage HTML
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Morpion (sans session)</title>
<style>
    body { font-family: Arial, sans-serif; background:#f4f7f9; display:flex; align-items:center; justify-content:center; min-height:100vh; margin:0; }
    .box { background:#fff; padding:18px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,.08); width:320px; text-align:center; }
    table { border-collapse:collapse; margin:10px auto; }
    td { width:72px; height:72px; border:2px solid #ddd; text-align:center; vertical-align:middle; }
    button.cell { width:100%; height:100%; font-size:24px; background:transparent; border:none; cursor:pointer; }
    button.cell:focus { outline:2px solid #007bff; }
    .symbol { font-size:28px; font-weight:700; }
    .controls { display:flex; justify-content:space-between; gap:10px; margin-top:12px; }
    .controls button { padding:8px 12px; border:none; border-radius:8px; cursor:pointer; color:#fff; }
    .reset { background:#dc3545; }
    .info { background:#007bff; color:#fff; padding:8px 10px; border-radius:8px; display:inline-block; margin-bottom:8px; }
</style>
</head>
<body>
<div class="box">
    <?php if ($message !== ''): ?>
        <div class="info"><?= $message ?></div>
    <?php else: ?>
        <div style="margin-bottom:8px;">Joueur courant : <strong><?= htmlspecialchars($next) ?></strong></div>
    <?php endif; ?>

    <form method="post" style="display:inline-block;">
        <!-- envoyer l'état actuel -->
        <input type="hidden" name="board" value="<?= htmlspecialchars($board) ?>">
        <input type="hidden" name="next" value="<?= htmlspecialchars($next) ?>">

        <table>
            <?php for ($r = 0; $r < 3; $r++): ?>
                <tr>
                    <?php for ($c = 0; $c < 3; $c++): 
                        $i = $r * 3 + $c;
                        $ch = $board[$i];
                    ?>
                        <td>
                            <?php if ($ch === '-'): ?>
                                <!-- case vide : bouton submit qui envoie move=index -->
                                <button class="cell" type="submit" name="move" value="<?= $i ?>">-</button>
                            <?php else: ?>
                                <!-- case occupée : afficher symbole -->
                                <span class="symbol"><?= htmlspecialchars($ch) ?></span>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <div class="controls">
            <button class="reset" type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</div>
</body>
</html>
