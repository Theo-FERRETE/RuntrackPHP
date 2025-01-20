<?php
function bubblesort(array $tab, bool $croissant): array {
    $n = count($tab);

    // chemin du tableau
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparer les éléments 
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échanger si nécessaire
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }

    return $tab;
}

$tab = ["banane", "pomme", "orange", "fraise"];
$tri_croissant = bubblesort($tab, true);
$tri_decroissant = bubblesort($tab, false);

echo "Tri croissant : " . implode(", ", $tri_croissant) . "\n";
echo "Tri décroissant : " . implode(", ", $tri_decroissant) . "\n";
?>
