<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['lastname'] = 'Doe';
$_SESSION['firstname'] = 'John';
$_SESSION['age'] = 30;

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 - Exercice 2 - Page index.php</title>
</head>

<body>
    <p>
        Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
        Ces variables auront été définies directement dans le code.
        Il faudra afficher le contenu de ces variables sur la deuxième page.
    </p>
    <a href="utilisateur.php">Page utilisateur</a>


</body>

</html>