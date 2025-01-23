<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacité Moyenne des Salles</title>
</head>
<body>
    <h1>Capacité Moyenne des Salles</h1>
    
    <?php
    try {
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour calculer la capacité moyenne 
        $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";

        // Exécution de la requête
        $query = $pdo->query($sql);

        // Résultat
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Affichage dans un tableau HTML
        echo "<table border='1'>";
        echo "<thead><tr><th>capacite_moyenne</th></tr></thead>";
        echo "<tbody>";
        echo "<tr><td>" . htmlspecialchars($result['capacite_moyenne']) . "</td></tr>";
        echo "</tbody></table>";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    ?>

</body>
</html>
