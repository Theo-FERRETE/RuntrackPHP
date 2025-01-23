<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superficie totale des étages</title>
</head>
<body>
    <h1>Superficie totale des étages</h1>
    
    <?php
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // calculer la superficie totale
        $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";

        // Exécuter la requête
        $query = $pdo->query($sql);

        // Résultats
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Tableau HTML
        if ($result) {
            echo "<table border='1'>";
            echo "<thead><tr>";
            foreach (array_keys($result) as $header) {
                echo "<th>" . htmlspecialchars($header) . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            echo "<tr>";
            foreach ($result as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
            echo "</tbody></table>";
        } else {
            echo "Aucune donnée trouvée.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>
