<?php
// Création de la chaîne
$str = "Les choses que l'on Possède finissent par nous posséder.";

// Algorithme pour inverser la chaîne
$strInverse = "";
$i = 0;
while (isset($str[$i])) { 
    $i++;
}

while ($i > 0) { // Parcours de la chaine dans le sens inverse
    $i--;
    $strInverse .= $str[$i]; 
}

// Affichage de la chaîne inversée
echo $strInverse;
?>
