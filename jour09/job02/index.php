<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Salles</title>
</head>
<body>
    <h1>Liste des Salles</h1>
    
    <?php
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL
        $sql = "SELECT * FROM salles";

        // Exécuter la requête
        $query = $pdo->query($sql);

        //résultats
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        /*// Afficher tableau var_dump()
        echo "<pre>";
        var_dump($results);
        echo "</pre>";*/

        // tableau HTML
        if (!empty($results)) {
            echo "<table border='1'>";
            echo "<thead><tr>";
            foreach (array_keys($results[0]) as $header) {
                echo "<th>" . htmlspecialchars($header) . "</th>";
            }
            echo "</tr></thead>";
            echo "<tbody>";
            foreach ($results as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Aucun étudiant trouvé.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>