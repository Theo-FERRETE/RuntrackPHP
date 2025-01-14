<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        // Afficher en italique
        echo "<i>$i</i><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Souligner le nombre
        echo "<u>$i</u><br>";
    } elseif ($i == 42) {
        // Remplacer 42 par "La Plateforme_"
        echo "La Plateforme_<br>";
    } else {
        // Afficher normalement
        echo "$i<br>";
    }
}
?>
