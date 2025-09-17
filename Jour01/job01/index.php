<?php
// -------------------------------
// 1. Variables de type string
// -------------------------------

// Création d'une variable str
$str = "LaPlateforme";
// On affiche le contenu de str
echo $str . "<br>";

// Création des variables str2 et str3
$str2 = "Vive";
$str3 = "!";

// On concatène et affiche "Vive LaPlateforme !"
echo $str2 . " " . $str . " " . $str3 . "<br>";

// -------------------------------
// 2. Variable numérique
// -------------------------------

// Création de la variable val
$val = 6;
// On affiche le contenu de val
echo $val . "<br>";

// On ajoute 4 à val
$val = $val + 4;
// On affiche à nouveau la nouvelle valeur
echo $val . "<br>";

// -------------------------------
// 3. Variable booléenne
// -------------------------------

// Création de la variable myBool avec true
$myBool = true;
// Affichage de myBool (true s’affiche comme "1")
echo $myBool . "<br>";

// On affecte false à myBool
$myBool = false;
// Affichage de myBool (false n’affiche rien → valeur vide)
echo $myBool . "<br>";
?>
