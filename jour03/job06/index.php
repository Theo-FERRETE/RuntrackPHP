<?php
// Création de la chaîne
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Algorithme pour inverser la chaîne
$strInverse = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $strInverse .= $str[$i];
}

// Affichage de la chaîne inversée
echo $strInverse;
?>
