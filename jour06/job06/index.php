<?php
// Définir le style par défaut
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec styles dynamiques</title>
    <!-- Charger le fichier CSS correspondant -->
    <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>.css">
</head>
<body>
    <form action="" method="POST">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?= $style === 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $style === 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $style === 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>
