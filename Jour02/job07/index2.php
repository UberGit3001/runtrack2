<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;\<br />
&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;\<br />
&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\<br />
&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\<br />
&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\<br />
/______\
<hr>


<?php
// $outerSpace = '';
// $innerSpace = '';
$LeftChar = '/';
$RightChar = '\\';
$Space = '&nbsp;&nbsp;';   // entités avec ';'
$Height = 8;

// init (nécessaires car variables commentées)
$innerSpace = '';
$foot = '';
$CountA = 0;
$CountB = 0;

for ($CountA; $CountA < $Height; $CountA++) {
    // (re)crée outerSpace à chaque tour
    $outerSpace = '';
    for ($countOuterSpaces = 0; $countOuterSpaces < ($Height - 1 - $CountA); $countOuterSpaces++) {
        $outerSpace .= $Space;
    }

    echo $outerSpace . "&nbsp;/" . $innerSpace . "\\" . "<br />";
    $innerSpace .= $Space . $Space;
}
for ($CountB; $CountB < $Height; $CountB++) {
    $foot .= '---';
}
echo $foot . "<br />";
?>



</body>
</html>