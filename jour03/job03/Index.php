<?php
// Création de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

$voyelles = "aeiouyAEIOUY";

// Parcours de la chaîne
$i = 0;
while (isset($str[$i])) { 
    $j = 0;
    while (isset($voyelles[$j])) { 
        if ($str[$i] === $voyelles[$j]) { 
            echo $str[$i];
            break; // sortir de la boucle
        }
        $j++;
    }
    $i++;
}
?>
