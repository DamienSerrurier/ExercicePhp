<?php
var_dump($_GET);

// Utilisation d'une regex pour sécuriser des données comme le prénom et Nom.
$regexName = '/^[a-zA-Z]+$/';

if ((isset($_GET['firstName'])) && (isset($_GET['lastName']))) {

    // Utilisation de la fonction preg_match pour vérifier que la chaîne de caractère contient les élèments attendu.
    if (preg_match($regexName, $_GET['firstName'])) {
        // Utilisation de la fonction htmlspecialchars pour convertir des balises html en entités spéciaux non dommageable pour le fichier php.
        $securedFirstname = htmlspecialchars($_GET['firstName']);
    } else {
        $securedFirstname = '<i>Mauvais format</i>';
    }

    if (preg_match($regexName, $_GET['lastName'])) {
        $securedLasttname = htmlspecialchars($_GET['lastName']);
    } else {
        $securedLasttname = '<i>Mauvais format</i>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 - Exercice 3 - Partie User superglobal $_GET</title>
</head>

<body>
    <p>Prénom : <?= $securedFirstname ?></p>
    <p>Nom : <?= $securedLasttname ?></p>

</body>

</html>