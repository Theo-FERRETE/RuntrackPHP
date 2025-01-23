<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre total d'étudiants</title>
</head>
<body>
    <h1>Nombre total d'étudiants</h1>
    
    <?php
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // récupérer le total d'étudiants
        $sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";

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
            echo "Aucun étudiant trouvé.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>
