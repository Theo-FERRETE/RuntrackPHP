<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom'])); 
    $_SESSION['prenoms'][] = $prenom; 
}

// Réinitialiser la liste des prénoms 
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = []; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
    <h1>Ajouter des prénoms</h1>
    
    <!-- Formulaire pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
    </form>

    <!-- Réinitialiser la liste -->
    <form method="post" style="margin-top: 10px;">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>

    <!-- Afficher la liste -->
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php if (!empty($_SESSION['prenoms'])): ?>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?php echo $prenom; ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Aucun prénom ajouté pour l'instant.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
