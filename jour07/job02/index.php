<?php
// Durée du cookie sur 1 An
$cookie_duration = 365 * 24 * 60 * 60;

if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + $cookie_duration);

// Réinitialiser le cookie avec Reset
if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600); 
    $nbvisites = 0; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec cookie</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <strong><?php echo $nbvisites; ?></strong></p>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>