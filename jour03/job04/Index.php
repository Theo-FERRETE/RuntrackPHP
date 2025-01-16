<?php
// Création de la chaîne
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$compteur = 0;

// Parcours de la chaîne
while (isset($str[$compteur])) {
    // Incrémentation du compteur
    $compteur++;
}

// résultat
echo "Le nombre de caractères dans la chaîne est : $compteur";
?>
