<?php
// Création de la chaîne
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Algorithme pour inverser la chaîne
$strInverse = "";
$i = 0;
while (isset($str[$i])) { // l'indice existe dans la chaîne
    $i++;
}

while ($i > 0) { 
    $i--;
    $strInverse .= $str[$i]; 
}

// chaîne inversée
echo $strInverse;
?>
