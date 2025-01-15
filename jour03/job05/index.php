<?php
// Création de la chaîne
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Définition des voyelles
$voyelles = "aeiouyAEIOUY";

// Initialisation du dictionnaire
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if (ctype_alpha($char)) { // Vérifie si c'est une lettre
        if (strpos($voyelles, $char) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</tbody>";
echo "</table>";
?>
