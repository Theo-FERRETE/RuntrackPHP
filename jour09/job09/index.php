<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salles triées par capacité décroissante</title>
</head>
<body>
    <h1>Informations des Salles (Triées par Capacité Décroissante)</h1>
    
    <?php
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour sélectionner les salles triées par capacité décroissante
        $sql = "SELECT * FROM salles ORDER BY capacite DESC";

        // Exécution de la requête
        $query = $pdo->query($sql);

        // Résultats
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        // Affichage dans un tableau HTML
        if (!empty($results)) {
            echo "<table border='1'>";
            echo "<thead><tr>";
            // les noms des colonnes
            foreach (array_keys($results[0]) as $header) {
                echo "<th>" . htmlspecialchars($header) . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            // Afficher les données
            foreach ($results as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Aucune salle trouvée.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>
