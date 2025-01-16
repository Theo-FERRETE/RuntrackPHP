<?php
// Vérifie si $_GET contient des arguments
if (!empty($_GET)) {
    echo "<h1>Liste des arguments GET</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead>";
    echo "<tr><th>Nom de l'argument</th><th>Valeur</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    // Parcours dans $_GET
    foreach ($_GET as $key => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($key) . "</td>"; 
        echo "<td>" . htmlspecialchars($value) . "</td>"; 
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<h1>Aucun argument GET reçu.</h1>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments GET</title>
</head>
<body>
    <h1>Formulaire de test GET</h1>
    <form action="" method="GET">
        <label for="arg1">Nom :</label>
        <input type="text" id="arg1" name="arg1">
        <br><br>

        <label for="arg2">Prenom:</label>
        <input type="text" id="arg2" name="arg2">
        <br><br>

        <label for="arg3">Mail :</label>
        <input type="text" id="arg3" name="arg3">
        <br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
