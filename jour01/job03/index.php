<?php
// Déclaration des variables
$boolean = true; // Booléen
$integer = 42; // Entier
$string = "Bonjour, LaPlateforme!"; // Caractère
$float = 3.14; // Nombre à virgule 

// Stockage Variable
$variables = [
    ["type" => "boolean", "nom" => "boolean", "valeur" => $boolean ? "true" : "false"],
    ["type" => "integer", "nom" => "integer", "valeur" => $integer],
    ["type" => "string", "nom" => "string", "valeur" => $string],
    ["type" => "float", "nom" => "float", "valeur" => $float],
];

// Partie HTML
echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";
echo "<thead>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "</thead>";
echo "<tbody>";

foreach ($variables as $variable) {
    echo "<tr>";
    echo "<td>" . $variable["type"] . "</td>";
    echo "<td>" . $variable["nom"] . "</td>";
    echo "<td>" . $variable["valeur"] . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
