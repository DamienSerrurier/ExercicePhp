<?php
session_start();
// On récupère les variable déclaré dans l'autre page "index.php".

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 - Exercice 2 - Utilisateur.php</title>
</head>

<body>
    <p>Nom :  <?= isset($_SESSION['lastname']) ? $_SESSION['lastname'] : '' ?></p>
    <p>Prénom :  <?= isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '' ?></p>
    <p>Age :  <?= isset($_SESSION['age']) ? $_SESSION['age'] : '' ?></p>


</body>

</html>