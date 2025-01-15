<?php
// Notion $Nombres pour créer le tableau
$nombres = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($nombres as $nombre) {
    // Vérification si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        echo "$nombre est pair<br />";
    } else {
        echo "$nombre est impair<br />";
    }
}
?>
