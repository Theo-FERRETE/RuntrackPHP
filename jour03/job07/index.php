<?php
// Création de la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Vérification que la chaîne n'est pas vide
if (strlen($str) > 0) {
    // On déplace chaque caractère vers la gauche
    $nouvelleStr = substr($str, 1) . $str[0];
    
    // Affichage du résultat
    echo $nouvelleStr;
}
?>
