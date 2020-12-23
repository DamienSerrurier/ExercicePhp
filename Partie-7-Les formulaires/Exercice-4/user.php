<?php
var_dump($_POST);

// Utilisation d'une regex pour sécuriser des données comme le prénom et Nom.
$regexName = '/^[a-zA-Z]+$/';

if ((isset($_POST['firstName'])) && (isset($_POST['lastName']))) {

    // Utilisation de la fonction preg_match pour vérifier que la chaîne de caractère contient les élèments attendu.
    if (preg_match($regexName, $_POST['firstName'])) {
        // Utilisation de la fonction htmlspecialchars pour convertir des balises html en entités spéciaux non dommageable pour le fichier php.
        $securedFirstname = htmlspecialchars($_POST['firstName']);
    } else {
        $securedFirstname = '<i>Mauvais format</i>';
    }

    if (preg_match($regexName, $_POST['lastName'])) {
        $securedLasttname = htmlspecialchars($_POST['lastName']);
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
    <title>Partie 7 - Exercice 4 - Partie User superglobal $_POST</title>
</head>

<body>
    <p>Prénom : <?= $securedFirstname ?></p>
    <p>Nom : <?= $securedLasttname ?></p>

</body>

</html>