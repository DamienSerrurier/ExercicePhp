<?php
// On vérifie dans la super global $_POST et on écrit nos cookies avant le code html.
if (isset($_POST['login'], $_POST['password'])) {
    $loginName = $_POST['login'];
    $passwordPass = $_POST['password'];
    setcookie('pseudo', $loginName, time() + 365 * 24 * 3600);
    setcookie('passwordPass', $passwordPass, time() + 365 * 24 * 3600);
    header('Location: user.php');
}

var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8 - Exercice 5 - Partie User superglobal $_COOKIE</title>
</head>

<body>
<p>Votre pseudonyme est <?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : '' ?></p>
<p>Votre mot de pass est <?= isset($_COOKIE['passwordPass']) ? $_COOKIE['passwordPass'] : ''  ?></p>
<a href="index.php">Modifier les données</a>

</body>

</html>