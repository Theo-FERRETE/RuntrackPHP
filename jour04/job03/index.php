 <?php
    // Vérifie si $_POST contient des données
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreArguments = count($_POST);
        echo "<p>Nombre d'arguments reçus via \$_POST : <strong>$nombreArguments</strong></p>";
        
        // Affiche les arguments envoyés pour plus de clarté
        if ($nombreArguments > 0) {
            echo "<p>Données reçues :</p>";
            echo "<ul>";
            foreach ($_POST as $cle => $valeur) {
                echo "<li><strong>$cle</strong> : " . htmlspecialchars($valeur) . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test des Arguments POST</title>
</head>
<body>
    <h1>Formulaire de test POST</h1>
    <form action="" method="POST"> <!-- Action est vide pour traiter le formulaire dans le même fichier -->
        <label for="arg1">Nom:</label>
        <input type="text" id="arg1" name="arg1">
        <br><br>

        <label for="arg2">Prenom :</label>
        <input type="text" id="arg2" name="arg2">
        <br><br>

        <label for="arg3">Mail :</label>
        <input type="text" id="arg3" name="arg3">
        <br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>