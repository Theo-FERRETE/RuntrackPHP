<?php
// Création de la chaîne
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Définition des voyelles
$voyelles = "aeiouyAEIOUY";

// compteur des voyelles et consonnes
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de la chaîne 
$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];
    if (ctype_alpha($char)) { // Vérifie si c'est une lettre
        // Parcours des voyelles 
        $j = 0;
        $isVoyelle = false;
        while (isset($voyelles[$j])) {
            if ($char === $voyelles[$j]) {
                $isVoyelle = true;
                break;
            }
            $j++;
        }

        // Mise à jour 
        if ($isVoyelle) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
    $i++;
}

// Affichage tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</tbody>";
echo "</table>";
?>
