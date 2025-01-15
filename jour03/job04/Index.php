<?php
// Création de la chaîne
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$compteur = 0;

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Incrémentation du compteur
    $compteur++;
}

// Affichage du résultat
echo "Le nombre de caractères dans la chaîne est : $compteur";
?>
